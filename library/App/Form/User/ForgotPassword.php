<?php

class App_Form_User_ForgotPassword extends Twitter_Bootstrap_Form_Horizontal
{
    public function init()
    {	
        
        $this->addElement('text', 'email', array(
            'label' => 'E-mail:',
            'required' => true,
            'validators' => array(
                'EmailAddress'
            )
        ));
	
	$this->addElement('button', 'send', array(
		'icon'       => 'chevron-right',
    	'whiteIcon'  => true,
		'iconRight'	=> true,
        'type'          => 'submit',
		'label'	=> 'Request a new password'
    )); 
    $this->addDisplayGroup(
        array('send'),
        'actions',
        array(
            'disableLoadDefaultDecorators' => true,
            'decorators' => array('Actions')
        )
    );
    


    }
}