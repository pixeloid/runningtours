<?php
class App_Acl extends Zend_Acl
{
	public function __construct()
	{

		$this->addRole(new Zend_Acl_Role('guest'));
		$this->addRole(new Zend_Acl_Role('member'));
		$this->addRole(new Zend_Acl_Role('admin'));

		$this->add(new Zend_Acl_Resource('index'));
		$this->add(new Zend_Acl_Resource('error'));
		$this->add(new Zend_Acl_Resource('user'));
		$this->add(new Zend_Acl_Resource('admin'));
		$this->add(new Zend_Acl_Resource('shop'));
		$this->add(new Zend_Acl_Resource('admin:index'));
//		$this->add(new Zend_Acl_Resource('admin:index:parameters'));
		// Allow guests to see the error, login and index pages
		
		$this->allow('guest');
		$this->allow('member');
		$this->allow('admin');
		
		$this->deny('guest',  'user');
	//	$this->deny('guest',  'admin:index');

	//	$this->deny('guest',  'admin');
	//	$this->deny('member',  'admin');

		$this->deny('member',  'user', 'signup');
		
		$this->allow('guest',  'user', 'forgotten-password');
		$this->allow('guest',  'user', 'new-password');
		$this->allow('guest',  'user', 'mail');
		$this->allow('guest',  'user', 'signup');
		$this->allow('guest',  'user', 'email-verification');

		
	}
}
