<?php

class App_Form_TeamMember extends Twitter_Bootstrap_Form_Horizontal
{
    public function init()
    {	
        
	
        $this->addElement('text', 'name', array(
            'validators' => array(
                array('StringLength', false, array(3, 40)),
            ),
            'required'   => true,
            'label'      => 'Name:',
			'class'		=> 'input-medium'
        ));
		    $this->addElement('text', 'photos', array());

        $this->addElement('Textarea', 'description', array(
            'required'   => true,
			'class'		=> 'tiny',
            'label'      => 'Feedback:',
	   ));


       $this->addElement('File', 'image', array(
           'label'      => 'Image:',
  		 ));
	
	$this->addElement('button', 'save', array(
        'type'          => 'submit',
		'label'	=> 'Save'
    )); 
		
    


    }
}