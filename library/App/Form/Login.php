<?php

class App_Form_Login extends Twitter_Bootstrap_Form_Horizontal
{
    public function init()
    {	
        
	
        $username = $this->addElement('text', 'lpusername', array(
			'belongsTo' => 'loginpanel',
            'filters'    => array('StringTrim', 'StringToLower'),
            'validators' => array(
                array('StringLength', false, array(3, 40)),
            ),
            'required'   => true,
            'label'      => 'Your username:',
			'class'		=> 'input-medium'
        ));

        $password = $this->addElement('password', 'lppassword', array(
       		'belongsTo' => 'loginpanel',
	     	'filters'    => array('StringTrim'),
            'validators' => array(
                'Alnum',
                array('StringLength', false, array(2, 20)),
            ),
            'required'   => true,
            'label'      => 'Password:',
     		'class'		=> 'input-medium'
	   ));
	
	$this->addElement('button', 'login', array(
		'icon'       => 'chevron-right',
    	'whiteIcon'  => true,
		'iconRight'	=> true,
        'type'          => 'submit',
		'label'	=> 'Login'
    )); 
    $this->addDisplayGroup(
        array('login'),
        'actions',
        array(
            'disableLoadDefaultDecorators' => true,
            'decorators' => array('Actions')
        )
    );
    


    }
}