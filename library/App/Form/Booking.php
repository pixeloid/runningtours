<?php

class App_Form_Booking extends Twitter_Bootstrap_Form_Horizontal
{
    protected $_edit = false;
    



    public function init()
    {	
	
	
		$em = Zend_Registry::get('EntityManager');
		
		
		$this->setDescription('Payments need to be performed at the meeting point in cash before each tour. If you need a payment invoice, please tell us by e-mail in advance. Please give us your billing details so we can send the invoice to you after the tour.');
		$this->addDecorator('Description');
		
		$this->addElement('select', 'tour', array(
			'label' => 'Tour'	
		));
		

	    $this->addElement('select', 'persons', array(
	        'multiOptions' => array(1 => 1,2 => 2,3 => 3,4 => 4,5 => 5),
	        'required' => true,
	    ));
	
	    $this->addElement('text', 'firstname', array(
            'label' => 'First name:',
            'required' => true
        ));
        
        $this->addElement('text', 'lastname', array(
            'label' => 'Last name:',
            'required' => true
        ));
    
            $this->addElement('text', 'email', array(
                'label' => 'E-mail:',
                'required' => true,
                'validators' => array(
                    'EmailAddress'
                )
            ));
    
        $this->addElement('hidden', 'date', array('decorators' => array('ViewHelper')));
    	
	


        

        $this->addElement('text', 'phone', array(
            'label' => 'Cell phone including country code: ',
            'required' => true
        ));
        
		
        $this->addElement('select', 'gender', array(
            'label' => 'Gender:',
            'multiOptions' => array(
                '1' => 'Male',
                '2' => 'Female'
            ),
            'required' => true
        ));

		$this->addElement('textarea', 'message', array(
	        'label' => 'What else should we know?<br /><small>(e.g. please tell us if you need a hotel-pick up before the run; or tell us your preferred running pace)</small>',
		 	'class'	=> 'input-block-level ',
			'escape'	=> false,
			'rows'	=> 6,
	    ));
	    
            
        $this->addElement('checkbox', 'accept', array(
                'label' => 'Accept the <a href="'.$this->getView()->url(array('action' => 'terms'), null, true ).'" target="_blank">terms and conditions</a>',
				'uncheckedValue'=> '',
				'checkedValue' => 1,
				'validators' => array(

				    array('notEmpty', true, array(
				      'messages' => array(
				        'isEmpty'=>'You must accept the terms!'
				      )
				    ))
				  ),
			   	'required'=>true,
				'decorators' => array(
					array('ViewHelper'),
	            	array('Label', array('placement' => 'APPEND', 'class' => 'control-checkbox', 'escape' => false)),
	            	array('ElementErrors'),
					array('Wrapper'),
				)
            ));

            
            $this->addElement('button', 'submit', array(
                'type' => 'submit',
                'label' => 'Place Booking!',
            ));
            
            $this->submit->removeDecorator('Label');
            
       		$this->getElement('message')->getDecorator('Label')->setOption('escape',false);
			$this->getElement('persons')->getDecorator('Label')->setOption('escape',false);
	
    }



	public function addClass($class='')
	{
		$this->_addClassNames($class);
	}


}