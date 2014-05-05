<?php

class App_Controller_Plugin_TemplateSeparate extends Zend_Controller_Plugin_Abstract {
	
	
	public function preDispatch(Zend_Controller_Request_Abstract $request)
	{
		$view = Zend_Controller_Front::getInstance()->getParam('bootstrap')->getResource('view');
		$layout = Zend_Controller_Front::getInstance()->getParam('bootstrap')->getResource('layout');

		if($request->getModuleName() == 'admin')
		{
			$layout->setLayoutPath(APPLICATION_PATH.'/modules/admin/views/'); 
			$view->addBasePath(APPLICATION_PATH.'/modules/default/views/partials');
			return true;
		}
		
		
		
		// setup viewRenderer with suffix and view
		$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
		$viewRenderer->setViewSuffix('tpl');
		$viewRenderer->setView($view);
		
		
		
		
		$view->addBasePath(APPLICATION_PATH.'/modules/' . $request->getModuleName() . '/views/common');
		$view->addBasePath(APPLICATION_PATH.'/modules/' . $request->getModuleName() . '/views/partials');
		$view->addBasePath(APPLICATION_PATH.'/modules/' . $request->getModuleName() . '/views/'.SITE_NAME);
		$view->addHelperPath(realpath(APPLICATION_PATH.'/../library/App/View/Helper'), 'App_View_Helper');
		
		$layout->setLayoutPath(APPLICATION_PATH.'/modules/' . $request->getModuleName() . '/views/'.SITE_NAME); 

		
	}
}
