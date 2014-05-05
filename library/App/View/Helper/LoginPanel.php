<?php

class App_View_Helper_LoginPanel extends Zend_View_Helper_Abstract {

	public function __construct() {

		$this->request = Zend_Controller_Front::getInstance()->getRequest();
		$this->form = $this->makeLoginForm();
		$this->message='';
		$this->auth = Zend_Registry::get('auth');
		$this->authAdapter = new App_Auth_Adapter(); ; 
	}

	//check login
	public function loginPanel() {

		if ($this->request->isPost() && $this->request->getPost('loginpanel')) {
			
			
			
			if($this->form->isValid($this->request->getPost())){

				$logindata = $this->request->getPost('loginpanel');

				$uname = $logindata['lpusername'];
				$paswd = $logindata['lppassword'];


				$this->authAdapter->setCredential($paswd);  
	            $this->authAdapter->setIdentity($uname);
				
				
				$result = $this->auth->authenticate($this->authAdapter);

				switch ($result->getCode()) {

				    case Zend_Auth_Result::FAILURE_IDENTITY_NOT_FOUND:
				        /** do stuff for nonexistent identity **/
				        break;

				    case Zend_Auth_Result::FAILURE_CREDENTIAL_INVALID:
				        /** do stuff for invalid credential **/
				        break;

				    case Zend_Auth_Result::SUCCESS:
						
						
						//$authStorage = $this->auth->getStorage();
                       // $authStorage->write($result->getIdentity());
                        

						$redirect = new Zend_Controller_Action_Helper_Redirector();
						$redirect->gotoRoute(array('controller' => 'user', 'action' => 'index'), 'defaultRoute');
	
				        break;

				    default:
				        /** do stuff for other failure **/
				        break;
				}
				
				
				foreach ($result->getMessages() as $message) {
					$this->form->getElement('lpusername')->addError($message);
			    }
				

			}else {
				$this->form->getMessages();
			}
			
		}
		else{
		}
		
		$auth = Zend_Auth::getInstance();
		
		if ($auth->hasIdentity()) {
			$this->loginPanel = $this->getUserNav();
		} else {
			$this->loginPanel = $this->getLoginForm();
			$this->loginPanel .= $this->getMessages();
		}
		return $this->loginPanel;
	}

	private function processLogin() {
		
	}

	private function makeLoginForm() {
		return new App_Form_Login;
	}

	private function getLoginForm(){
		return $this->form;
	}

	private function getMessages(){
		return $this->message;
	}

	private function getUserNav(){        
		//return partial/render
	}
}