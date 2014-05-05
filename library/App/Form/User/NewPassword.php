<?php

class App_Form_User_NewPassword extends Twitter_Bootstrap_Form_Horizontal
{
    public function init()
    {	
        
		$this->addElement('password','pass', array(
			'label' => 'New Password:',
            'required' => true,
            'validators' => array(
                array('stringLength', false, array(6, 20))
            )
		));

	$this->addElement('password','confirm_pass', array(
		'label' => 'Confirm New Password:',
        'required' => true,
        'validators' => array(
            array('Identical', false, array('token' => 'pass'))
        )
	));
			
	$this->addElement('button', 'send', array(
		'icon'       => 'chevron-right',
    	'whiteIcon'  => true,
		'iconRight'	=> true,
        'type'          => 'submit',
		'label'	=> 'Create password'
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