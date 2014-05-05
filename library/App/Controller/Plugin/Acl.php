<?php

class App_Controller_Plugin_Acl extends Zend_Controller_Plugin_Abstract
{	
	
	protected $_role = 'guest';
	
	
	public function preDispatch(Zend_Controller_Request_Abstract $request)
	{
		$acl = Zend_Registry::get('acl');
		$auth = Zend_Registry::get('auth');
		$role = Zend_Registry::get('role');
		$em = Zend_Registry::get('EntityManager');
		
		$mysession = new Zend_Session_Namespace('mysession');
		
		
		$front = Zend_Controller_Front::getInstance();
		$defaultModule = $front->getDefaultModule();
		
		$resource = ($front->getDefaultModule() == $request->getModuleName()) ? $request->getControllerName() : $request->getModuleName() . ':' .$request->getControllerName();
		
		if($auth->hasIdentity()) {
			
			if(!$acl->isAllowed($role, $resource, $request->getActionName())) {
				
				$redirect = new Zend_Controller_Action_Helper_Redirector();
				return $redirect->setGotoRoute(array('module' => 'default', 'controller' => 'error', 'action' => 'deny'), 'defaultRoute');
			}
		} else {
			if(!$acl->isAllowed($role, $resource, $request->getActionName())) {
				
				$redirect = new Zend_Controller_Action_Helper_Redirector();
				return $redirect->setGotoRoute(array('module' => 'default', 'controller' => 'error', 'action' => 'deny'), 'defaultRoute');
			}
		}
		
		


		// if($auth->hasIdentity()){
		// 	$user = $auth->getIdentity();
		// 	if(is_array($user)){
		// 		$role = $user['role'];
		// 	}
		// }

		// $privilageName=$request->getActionName();
		// 
		// if(!$acl->isAllowed($role,null,$privilageName)){
		// 	$request->setControllerName('error');
		// 	$request->setActionName('deny');
		// }



	}
}
?>