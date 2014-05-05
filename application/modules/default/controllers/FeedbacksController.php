<?php

class FeedbacksController extends Zend_Controller_Action
{
	private $em;
	private $request;




	public function init()
	{	

		$this->em = Zend_Registry::get('EntityManager');
		$this->request = $this->getRequest();
		

	    $this->isAdmin = Zend_Auth::getInstance()->hasIdentity();
		$this->view->isAdmin = $this->isAdmin;
	}



	public function indexAction()
	{
		$this->view->feedbacks = $this->em->getRepository('Entity\Feedback')->findAll();
	}
	
	public function editAction()
	{	
		
		if(!$this->isAdmin) $this->_helper->redirector->gotoRoute(array('action' => 'index'));
		
		
		$form = new App_Form_Feedback;
		
		$id = $this->getRequest()->getParam('id', 1);
		$feedback = $this->em->getRepository('Entity\Feedback')->findOneById($id);
		
		$feedbackArray = $feedback->toArray();

		$form->populate($feedbackArray);

        if ($this->_request->isPost()) {

            $formData = $this->_request->getPost();
				
            if ($form->isValid($formData)) {
				
				$feedback->description = $formData['description'];
				$feedback->author = $formData['author'];
                $this->em->persist($feedback);
                $this->em->flush();
				
				$this->_helper->redirector->gotoRoute(array('action' => 'index'));
				
            }

        }


		$this->view->feedback = $feedback;
		$this->view->form = $form;
	}


	public function addAction()
	{	
		
		if(!$this->isAdmin) $this->_helper->redirector->gotoRoute(array('action' => 'index'));
		
		
		$form = new App_Form_Feedback;
		

        if ($this->_request->isPost()) {

            $formData = $this->_request->getPost();
				
			
            if ($form->isValid($formData)) {
				
				$feedback = new Entity\Feedback;
				
				$feedback->description = $formData['description'];
				$feedback->author = $formData['author'];
                $this->em->persist($feedback);
                $this->em->flush();
				
				$this->_helper->redirector->gotoRoute(array('action' => 'index'));
				
            }

        }

		$this->view->form = $form;
	}
	
	public function deleteAction()
	{	
		$id = $this->getRequest()->getParam('id', 1);
		$feedback = $this->em->getRepository('Entity\Feedback')->findOneById($id);
        $this->em->remove($feedback);
        $this->em->flush();
		$this->_helper->redirector->gotoRoute(array('action' => 'index'));
		
	}

}

