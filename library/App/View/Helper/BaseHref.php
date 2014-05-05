<?php


class App_View_Helper_BaseHref extends Zend_View_Helper_Abstract
{
	
	private $_baseUrl = null;
	
	    public function baseHref()
	    {	
		    if (null === $this->_baseUrl) {
	            if ($baseUrl = Zend_Registry::get('config')->app->baseUrl) {
	                $this->_baseUrl = $baseUrl;
	            } else if (isset($this->view->baseUrl)) {
	                $this->_baseUrl = $this->view->baseUrl;
	            } else {
	                $request = Zend_Controller_Front::getInstance()->getRequest();
	                $this->_baseUrl = $request->getBaseUrl();
	            }
	        }

	        return $this->_baseUrl;
	    }

}
