<?php

class App_Form_Tour extends Twitter_Bootstrap_Form_Horizontal
{
    protected $_edit = false;
    
    public function init()
    {	
	
	    $this->addElement('text', 'title', array(
            'label' => 'Tour title:',
   		 	'class'	=> 'input-block-level ',
         'required' => true
        ));
    $this->addElement('text', 'distance', array(
        'label' => 'Distance:',
	 	'class'	=> 'input-mini ',
        'required' => true
    ));

	    $this->addElement('text', 'photos', array());

        
        $this->addElement('textarea', 'brief', array(
            'label' => 'Tour brief:',
		 	'class'	=> 'input-block-level ',
			'cols'	=> 100,
			'rows'	=> 2,
            'required' => true
        ));

    $this->addElement('textarea', 'description', array(
        'label' => 'Tour description:',
	 	'class'	=> 'input-block-level tiny',
		'cols'	=> 100,
		'rows'	=> 15,
        'required' => true
    ));

$this->addElement('textarea', 'stops', array(
    'label' => 'Stops (Separate by Enter):',
	'rows'	=> 10,
 	'class'	=> 'input-block-level ',
   'required' => true
));
		$this->addElement('select', 'hour', array(
		    'label' => 'Start at hour:',
		    'required' => true,
			'multiOptions' => array(
  	 			'6:00:00' =>  		'6:00', 
	 '07:00:00' =>  		'7:00', 
	 '08:00:00' =>  		'8:00', 
	 '09:00:00' =>  		'9:00',
	 '10:00:00' =>		'10:00', 
	 '11:00:00' =>		'11:00', 
	 '12:00:00' =>		'12:00',
	 '13:00:00' =>		'13:00', 
	 '14:00:00' =>		'14:00', 
	 '15:00:00' =>		'15:00',
	 '16:00:00' =>		'16:00', 
	 '17:00:00' =>		'17:00', 
	 '18:00:00' =>		'18:00',
	 '19:00:00' =>		'19:00',
	 '20:00:00' =>		'20:00',
	 '21:00:00' =>		'21:00',
	 '22:00:00' =>		'22:00',
 	 		)
		));
		
		$this->addElement('MultiCheckbox', 'day', array(
		    'label' => 'Day:',
		    'required' => true,
			'multiOptions' => array(
				'1' => 'Monday',
				'2' => 'Tuesday',
				'3' => 'Wednesday',
				'4' => 'Thursday',
				'5' => 'Friday',
				'6' => 'Saturday',
				'7' => 'Sunday',
			)
		));
		
		
		
        

            
            $this->addElement('button', 'submit', array(
                'type' => 'submit',
                'label' => 'Save tour',
            ));
            
            $this->submit->removeDecorator('Label');
            
        
        
        
        
        
        
    }


	// public function isValid($data) {
	// 	
	// 	
	// 	$em = Zend_Registry::get('EntityManager');
	// 	
	//     $isValid = parent::isValid($data); 
	// 
	// 	$query = $em->createQuery('SELECT t FROM Entity\Tour t WHERE t.day = :day AND t.id != :id')->setParameters(array('day'=>$data['day'],'id'=>$data['id']));
	// 	
	// 	if($result = $query->getResult())
	// 	{
	// 		
	// 		$this->getElement('day')->setErrors(array($result[0]->title . ' is ezen a napon van!'));
	// 			
	// 			$isValid = false;
	// 	}
	// 
	//     return $isValid;
	// }

}