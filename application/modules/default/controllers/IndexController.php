<?php

class IndexController extends Zend_Controller_Action
{
	private $em;
	private $request;




	public function init()
	{


		$date = new DateTime; 	
		$this->em = Zend_Registry::get('EntityManager');
		$this->config = Zend_Registry::get('config');
		$this->request = $this->getRequest();

		$ajaxContext = $this->_helper->getHelper('AjaxContext');
	  	$ajaxContext->addActionContext('book-now', 'html')
	  				->addActionContext('timetable', 'html')
	  				->initContext();
		
		$this->fb = new Facebook_Facebook(array(
		  'appId'  => '325033537600259',
		  'secret' => 'be79b56ee597871ccb73cdc9cd44a8a6',
		));
		
		
		$fbUserId = $this->fb->getUser();
 		$this->view->fbUserId = $fbUserId;


		if ($fbUserId) { 
	      	$this->fbUserInfo = $this->fb->api('/' . $fbUserId);
	 		$this->view->fbUserInfo = $this->fbUserInfo;
		}		
		
		
		$this->view->request = $this->request;
		$this->view->config = $this->config;

		$this->maxPerTour = $this->config->app->maxpersons;
		
		$this->prices = array(
			1 	=>	25,
			2	=>	20,
			3	=>	20,
			4	=>	15,
			5	=>	15,
		);
		
		
		if($activePage = $this->view->mainNav->findOneBy('active', true))
		{
			$label = $activePage->get('label');
			$this->view->headTitle()->prepend($label);
		}
		
	    $this->isAdmin = Zend_Auth::getInstance()->hasIdentity();
		$this->view->isAdmin = $this->isAdmin;
	}


	public function indexAction()
	{	
		$now = new DateTime;
		$lastminute = null;

		$query = $this->em->createQuery('SELECT t, r, SUM(r.persons) as s  FROM Entity\Reservation r INNER JOIN r.tour t WHERE r.datefrom > :date  GROUP BY r.datefrom HAVING s < :maxNum ORDER BY r.datefrom ASC')
		->setParameters(array(
			'date' => $now->format('Y-m-d'), 
			'maxNum' => $this->maxPerTour
		));

		$result = current($query->getResult());

		if($result)
		{
			$lastminute = $result[0];
			$lastminute->personsNeeded = $this->maxPerTour - $result['s'];
			$lastminute->price = $this->getPrice($lastminute->personsNeeded, 1);
			
		}


		$tours = $this->em->getRepository('Entity\Tour')->findAll();
		$feedbacks = $this->em->getRepository('Entity\Feedback')->findAll();

		shuffle($feedbacks);
		shuffle($tours);

		$this->view->tour = $tours[0];


		$this->view->lastminute = $lastminute;
		$this->view->feedback = current($feedbacks);
	}

	public function bookNowAction()
	{
		$id = $this->getRequest()->getParam('tour', false);
		$date = $this->getRequest()->getParam('date', null);
		$selectedTour = $this->em->getRepository('Entity\Tour')->findOneById($id);
		
		$form = new App_Form_Booking(array(), $selectedTour);
		$form->persons->setAttrib('data-url', $this->view->url(array('action' => 'get-price'), null, false));

		

		$form->addClass('ajax');
		$form->setDefaults(array('date' => $date));

		$tourEl = $form->getElement('tour');

		foreach ($this->em->getRepository('Entity\Tour')->findAll() as $tour) {
			$tourEl->addMultiOption( $tour->id, $tour->title);
		}

		if($selectedTour){
			$tourEl->setMultiOptions(array($selectedTour->id => $selectedTour->title));
		}



		if (isset($this->fbUserInfo)) {

			$form->setDefaults(array(
				'firstname' => $this->fbUserInfo['first_name'],
				'lastname' => $this->fbUserInfo['last_name'],
				'email' => $this->fbUserInfo['email'],
			));
		}
		$form->setAction($this->view->url());
		
		$freePlaces = $this->getRouteFreePlaces($id, $date);
		
		$form->persons->setMultiOptions(array());
		
		for ($i=1; $i <= $freePlaces; $i++) { 
	   		$form->persons->addMultiOption($i, $i);
		}


        if ($this->_request->isPost()) {

            $formData = $this->_request->getPost();
			
            if ($form->isValid($formData)) {
				
				$tour = $this->em->getRepository('Entity\Tour')->findOneById($formData['tour']);
				
				$booking = new Entity\Reservation;
				
				$booking->email = $formData['email'];
				$booking->firstname = $formData['firstname'];
				$booking->lastname = $formData['lastname'];
				$booking->gender = $formData['gender'];
				$booking->datefrom = $formData['date'];
				$booking->dateto = $formData['date'];
				$to = new DateTime($formData['date']);
				$to->add(new DateInterval('PT'.$tour->hours.'H'));
				$booking->dateto = $to->format('Y-m-d H:i');

				$booking->persons = $formData['persons'];
				$booking->tour = $tour;
				$booking->phone = $formData['phone'];
				$booking->message = $formData['message'];
				
                $this->em->persist($booking);
                $this->em->flush();
				
				$this->sendConfirmationEmail($booking);
				
				return $this->_forward('booking-complete');
				
            }

        }

		$this->view->selectedTour = $selectedTour;
		$this->view->date = new DateTime($date);
		$this->view->form = $form;		
		
	}
	
	public function customizedTourAction()
	{
		
		$form = new App_Form_Booking();
		$complete = $this->getRequest()->getParam('complete', false);
		

		if (isset($this->fbUserInfo)) {

			$form->setDefaults(array(
				'firstname' => $this->fbUserInfo['first_name'],
				'lastname' => $this->fbUserInfo['last_name'],
				'email' => $this->fbUserInfo['email'],
			));
		}
		
		$form->setAction($this->view->url());
		$form->setDescription(null);
		$form->removeElement('accept');
		$form->getElement('message')->setLabel('Your plan:');
		$form->getElement('submit')->setLabel('Send!');
		$form->getElement('persons')->setLabel('Number of persons:');
		
		
		$form->persons->setMultiOptions(array());
		
		for ($i=1; $i <= 5; $i++) { 
	   		$form->persons->addMultiOption($i, $i);
		}

	  
        if ($this->_request->isPost()) {

            $formData = $this->_request->getPost();
			
            if ($form->isValid($formData)) {
				
				$booking = new Entity\Reservation;
				
				$booking->email = $formData['email'];
				$booking->firstname = $formData['firstname'];
				$booking->lastname = $formData['lastname'];
				$booking->gender = $formData['gender'];
				$booking->phone = $formData['phone'];
				$booking->persons = $formData['persons'];
				$booking->datefrom = date('Y-m-d H:i:s');
				$booking->message = $formData['message'];
				
                $this->em->persist($booking);
                $this->em->flush();
				
				$this->sendCustomConfirmationEmail($booking);
				
				$this->_helper->redirector->gotoRoute(array('complete' => true));
            }

        }
		$this->view->headTitle()->prepend('Customize your tour!');
		$this->view->complete = $complete;		
		$this->view->form = $form;		
		
	}
	

	public function toursAction()
	{
		$id = $this->getRequest()->getParam('id', 1);
		$selectedTour = $this->em->getRepository('Entity\Tour')->findOneById($id);
		
		$this->view->headTitle()->prepend($selectedTour->title);
		$this->view->tours = $this->em->getRepository('Entity\Tour')->findAll();
		$this->view->selectedTour = $selectedTour;
		
	}

	public function timetableAction()
	{
		$timetable = $this->getTimetable();
		$this->view->timetable = $timetable;
	}

	public function getRouteDatesAction()
	{	
		$persons = $this->getRequest()->getParam('persons', 1);
		$id = $this->getRequest()->getParam('id', 1);
	
		$result = $this->getRouteDates($id, $persons);
		
		$this->_helper->json($result);
	}

	
	public function editTourAction()
	{	
		
		if(!$this->isAdmin) $this->_helper->redirector->gotoRoute(array('action' => 'index'));
		
		$id = $this->getRequest()->getParam('id', 1);
		$tour = $this->em->getRepository('Entity\Tour')->findOneById($id);
		$form = new App_Form_Tour();
		
		$tourArray = $tour->toArray();
		$form->populate($tourArray);
		$form->prices->setValue(implode(',', $tour->prices));

        if ($this->_request->isPost()) {

            $formData = $this->_request->getPost();
			$formData['id'] = $tour->id;
				
			
            if ($form->isValid($formData)) {
				
				$tour->brief = $formData['brief'];
				$tour->description = $formData['description'];
				$tour->stops = $formData['stops'];
				$tour->title = $formData['title'];
				$tour->hour = $formData['hour'];
				$tour->distance = $formData['distance'];
				$tour->day = implode('|', array_values($formData['day']));
				
				$tour->photos->clear();
				foreach(explode(',', $formData['photos']) as $id)
				{
					$file = $this->em->getRepository('Entity\File')->findOneById($id);
					
					if(!$file) continue;
					
					$tourphoto = new Entity\TourPhoto;
					$tourphoto->file = $file;
					$tourphoto->tour = $tour;
					$tour->photos->add($tourphoto);
				}
				
                $this->em->persist($tour);
                $this->em->flush();
				
				$this->_helper->redirector->gotoRoute(array('action' => 'tours'));
				
            }
        }

		$fileids = array();
		foreach ($tour->photos as $photo) {
			if(!$photo->file) continue;
			$fileids[] = $photo->file->id;
		}
		$form->photos->setValue(implode(',', $fileids));


		$this->view->form = $form;		
		$this->view->tour = $tour;
		
	}


	public function addTourAction()
		{	
			
			if(!$this->isAdmin) $this->_helper->redirector->gotoRoute(array('action' => 'index'));
			
			$form = new App_Form_Tour();
			
			// $tourArray = $tour->toArray();
			// $tourArray['hour'] = $tour->hour;

			// $form->populate($tourArray);
			// $form->day->setValue(explode('|', $tour->day));

	        if ($this->_request->isPost()) {

	            $formData = $this->_request->getPost();
					
				
	            if ($form->isValid($formData)) {
					
					$tour = new Entity\Tour;

					$tour->brief = $formData['brief'];
					$tour->description = $formData['description'];
					$tour->stops = $formData['stops'];
					$tour->title = $formData['title'];
					$tour->hours = $formData['hours'];
					$tour->distance = $formData['distance'];
					$tour->prices = explode(',', $formData['prices']);
					
					$tour->photos->clear();
					foreach(explode(',', $formData['photos']) as $id)
					{
						$file = $this->em->getRepository('Entity\File')->findOneById($id);
						
						if(!$file) continue;
						
						$tourphoto = new Entity\TourPhoto;
						$tourphoto->file = $file;
						$tourphoto->tour = $tour;
						$tour->photos->add($tourphoto);
					}
					
	                $this->em->persist($tour);
	                $this->em->flush();
					
					$this->_helper->redirector->gotoRoute(array('action' => 'tours'));
					
	            }

	        }

			// $fileids = array();
			// foreach ($tour->photos as $photo) {
			// 	if(!$photo->file) continue;
			// 	$fileids[] = $photo->file->id;
			// }
			// $form->photos->setValue(implode(',', $fileids));


			$this->view->form = $form;		
			//$this->view->tour = $tour;
			
		}

	
	public function getRouteFreePlaces($id, $date)
	{
		$query = $this->em->createQuery('SELECT SUM(r.persons) as num FROM Entity\Reservation r LEFT JOIN r.tour t  WHERE r.datefrom = :date AND t.id = :tourId  GROUP BY r.datefrom')
		
		->setParameters(array(
			'date' => ($date), 
			'tourId' => $id
			)
		);

		try {
			
			$reservedPersons = $query->getSingleScalarResult();
			
		} catch (Exception $e) {
			
			$reservedPersons = 0;
		}
		
		return $this->maxPerTour - $reservedPersons;
		
	}
	
	
	
	private function getTimetable()
	{



		$reservations = array();

		$now = new DateTime(date('Y-m-d'));
		$now->add(new DateInterval('P1D'));
		$now->add(new DateInterval('PT7H'));

		$result = array();

		$query = $this->em->createQuery('SELECT r.datefrom, r.dateto, t.title, t.id AS tourid, t.hours, t.onlyinaday AS onlyinaday,  SUM(r.persons) as num FROM Entity\Reservation r LEFT JOIN r.tour t  WHERE r.datefrom > :today GROUP BY r.datefrom');
		$query->setParameters(array(
			'today' =>  new DateTime
			)
		);

		$r = $query->getArrayResult();
		
		foreach($r as $reservation){
			$reservations[$reservation['datefrom']->format('Y-m-d H:i')] = $reservation;
		}


		$days = array();
		
		for ($i=0; $i < 2*7*21 + 12; $i++) { 
			
			$nowformatted = $now->format('Y-m-d H:i');

			$current = array(
					'hour' => clone $now,
					'reservation' => isset($reservations[$nowformatted]) ? $reservations[$nowformatted] : null
				);

			$days[] = $current;

			if ($now->format('H') == '23') {
				$now->add(new DateInterval('PT8H'));
			}else{
				$now->add(new DateInterval('PT1H'));
			}

			
		}

		return $days;
	
	}

	public function getPriceAction()
	{	
		
		$id = $this->getRequest()->getParam('tour', null);
		$date = $this->getRequest()->getParam('date', null);
		$persons = $this->getRequest()->getParam('persons', 1);
		$tour = $this->em->getRepository('Entity\Tour')->findOneById($id);
		$freePlaces = $this->getRouteFreePlaces($tour->id, $date);

		$prices = array(
			$tour->prices[0],
			$tour->prices[1],
			$tour->prices[1],
			$tour->prices[2],
			$tour->prices[2]
		);

		$label= '<label class="control-label"> Number of persons:<br /><a href="#" class="pop" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="right" data-content="We are pleased to offer discounts for group bookings.
																<ul><li>'.$tour->prices[0].' euro/1 person</li>
				                                                <li>'.$tour->prices[1].' euro/ persons for 2-3</li>
				                                                <li>'.$tour->prices[2].' euro/ person for 4-5</li>
				                                               	</ul> <p>We do not undertake the risk of the absence of other customers. Prices on the website serve only informational purposes. Final price will be counted on the actual number of participants.</p>">How we calculate?</a></label>';


		$this->_helper->json(array(
			'price' => $prices[$this->maxPerTour - $freePlaces + $persons - 1],
			'label' => $label
		));
		
	}

	public function getPrice($personsLeft, $persons)
	{

		
	}

	public function sendConfirmationEmail($booking)
	{	
		
		
		$body = "Hello $booking->firstname $booking->lastname!\n\n\nThanks for booking  your " . $booking->tour->title . " with us, for $booking->persons person(s).\n\nAre You ready for the adventure? An amazing experience comes to You soon!\n\nSave the date: " . $booking->datefrom->format('d-M-Y H:i') . "\n\nMeeting point is at " . $booking->tour->stops[0] . "\nPlease be on time!\n\n\n";
		
		if($booking->message){
			$body .= "Your message: $booking->message\n\n";
		}
		
		$body .= "\nDetails:\n\n";
		$body .= "\nE-mail: $booking->email";
		$body .= "\nFirst name: $booking->firstname";
		$body .= "\nLast name$booking->lastname";
		$body .= "\nGender: $booking->gender";
		$body .= "\nMobile: $booking->phone";
		
		
		$body .= "\n\nDo you have any further questions or special requests? In this case please do not hesitate to contact us directly at: +36 70 6146748 or at: hello@runningtoursbudapest.com\n\nWe are looking forward to run with you through the beautiful sights of Budapest!\n\nRunning Tours Budapest Team\n\n\nLike us on Facebook:
https://www.facebook.com/RunningToursBudapest";
		
		$mail = new Zend_Mail('UTF-8');
	
		$mail->setBodyText($body);
		$mail->setFrom('noreply@runningtoursbudapest.com', 'Running Tours Budapest Team');
		$mail->addTo($booking->email, $booking->firstname.' '.$booking->lastname);
		$mail->setSubject('Tour booking confirmation – ' . $booking->tour->title);
		$mail->send();		

		$mail = new Zend_Mail('UTF-8');

		$mail->setBodyText($body);
		$mail->setFrom($booking->email, $booking->firstname.' '.$booking->lastname);
		$mail->addTo('makkermakker@hotmail.com');
		$mail->addTo('hello@runningtoursbudapest.com');
		$mail->setSubject('Tour booking received – ' . $booking->tour->title);
		$mail->send();		

	}


	public function sendCustomConfirmationEmail($booking)
	{	
		
		
		$body = "Hello $booking->firstname $booking->lastname!\n\n\nThanks for booking  your customized tour for $booking->persons person(s).\n\nNow we are processing your request. We will get back to you in 24 hours with our customized special offer.\n\nAre You ready for the adventure? An amazing experience comes to You soon!\n\n\n";
		
		if($booking->message){
			$body .= "Your message contained the following: $booking->message\n\n";
		}
		
		$body .= "\nDetails:\n\n";
		$body .= "\nE-mail: $booking->email";
		$body .= "\nFirst name: $booking->firstname";
		$body .= "\nLast name$booking->lastname";
		$body .= "\nGender: $booking->gender";
		$body .= "\nMobile: $booking->phone";
		
		
		$body .= "\n\nDo you have any further questions or special requests? In this case please do not hesitate to contact us directly at: +36 70 6146748 or at: hello@runningtoursbudapest.com\n\nWe are looking forward to run with you through the beautiful sights of Budapest!\n\nRunning Tours Budapest Team\n\n\nLike us on Facebook:
https://www.facebook.com/RunningToursBudapest";
		
		
		
		$mail = new Zend_Mail('UTF-8');
	
		$mail->setBodyText($body);
		$mail->setFrom('noreply@runningtoursbudapest.com', 'Running Tours Budapest Team');
		$mail->addTo($booking->email, $booking->firstname.' '.$booking->lastname);
		$mail->setSubject('Tour booking confirmation');
		$mail->send();		

		$mail = new Zend_Mail('UTF-8');

		$mail->setBodyText($body);
		$mail->setFrom($booking->email, $booking->firstname.' '.$booking->lastname);
		$mail->addTo('makkermakker@hotmail.com');
		$mail->addTo('hello@runningtoursbudapest.com');
		$mail->setSubject('Customized tour request received');
		$mail->send();		

	}



	public function  loginAction(){
		
		$auth    = Zend_Auth::getInstance();

        $request = $this->getRequest();
		$this->view->form = new App_Form_AdminLoginForm(array('method' => 'post'));

        // Check if we have a POST request
        // if not, display login form
        if (!$request->isPost()) {
        	return $this->render("login");
        }

        // Get our form and validate it
        if (!$this->view->form->isValid($request->getPost())) {
            // Invalid entries - render form
            return $this->render('login'); // re-render the login form
        }

        // Get our authentication adapter and check credentials
        $adapter = new App_Auth_AdminAdapter($this->view->form->getValues());


        $result  = $auth->authenticate($adapter);
        if (!$result->isValid()) {
            // Invalid credentials
            $this->view->form->setDescription('Wrong login!');
            return $this->render('login'); // re-render the login form
        }

        // We're authenticated! Redirect to the admin/index action
        $this->_helper->redirector('index');
    }


    public function  logoutAction(){
        Zend_Auth::getInstance()->clearIdentity();
		
		$redirect = ($this->getRequest()->getParam('redirect')) ? $this->getRequest()->getParam('redirect') : 'index';
		//echo $redirect; exit;
        $this->_helper->redirector('index','index',$redirect); // back to login page
    }


	public function galleryAction()
	{
		$this->view->tours = $this->em->getRepository('Entity\Tour')->findAll();
	}

	public function __call($method, $args)
	    {
	        if ('Action' == substr($method, -6)) {
				
				$action = substr($method, 0, -6);
	
	            return $this->render($action);
	        }

	        // all other methods throw an exception
	        throw new Exception('Invalid method "'
	                            . $method
	                            . '" called',
	                            500);
	    }
}

