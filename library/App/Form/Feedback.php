<?php

class App_Form_Feedback extends Twitter_Bootstrap_Form_Horizontal
{
    public function init()
    {	
        
	
        $this->addElement('text', 'author', array(
            'validators' => array(
                array('StringLength', false, array(3, 40)),
            ),
            'required'   => true,
            'label'      => 'Author:',
			'class'		=> 'input-medium'
        ));

        $password = $this->addElement('Textarea', 'description', array(
            'required'   => true,
			'class'		=> 'tiny',
            'label'      => 'Feedback:',
	   ));
	
	$this->addElement('button', 'save', array(
        'type'          => 'submit',
		'label'	=> 'Save'
    )); 
		
    $this->save->removeDecorator('Label');
    


    }
}