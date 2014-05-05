<?php


class App_Auth_AdminAdapter implements Zend_Auth_Adapter_Interface {
    protected $_username;
    protected $_password;
 
    public function __construct($options){
        $this->_username=$options['username'];
        $this->_password=$options['password'];
    }
 
    public function authenticate(){
        $users=array('admin'=>'rnngtrs1');
 
        if(!isset($users[$this->_username])) {
            return new Zend_Auth_Result(Zend_Auth_Result::FAILURE_IDENTITY_NOT_FOUND,$this->_username);
        }
 
        if(isset($users[$this->_username]) && $users[$this->_username] != $this->_password) {
            return new Zend_Auth_Result(Zend_Auth_Result::FAILURE_CREDENTIAL_INVALID,$this->_username);
        }
 
        if(isset($users[$this->_username]) && $users[$this->_username] == $this->_password) {
            return new Zend_Auth_Result(Zend_Auth_Result::SUCCESS,$this->_username);
        }
 
        return new Zend_Auth_Result(Zend_Auth_Result::FAILURE_UNCATEGORIZED,$this->_username);
    }
}