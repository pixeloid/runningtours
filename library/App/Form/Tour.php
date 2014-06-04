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
        'label' => 'Tour distance:',
	 	'class'	=> 'input-mini ',
        'required' => true
    ));
    $this->addElement('text', 'hours', array(
        'label' => 'Tour length in hours:',
	 	'class'	=> 'input-mini ',
        'required' => true
    ));
    $this->addElement('text', 'prices', array(
        'label' => 'Prices, separated by commas (1pers, 2-3 pers, 4- pers):',
	 	'class'	=> 'input-small ',
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