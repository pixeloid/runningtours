<?php

class App_Auth_Adapter implements Zend_Auth_Adapter_Interface {

	/** 
	* The field name which will be the identifier (username...) 
	* 
	* @var string 
	*/  
	private $_identityCol;  

	/** 
	* The field name which will be used for credentials (password...) 
	* 
	* @var string 
	*/  
	private $_credentialCol;  

	/** 
	* Actual identity value (my_all_known_username) 
	* 
	* @var string 
	*/  
	private $_identity;  

	/** 
	* Actual credential value (my_secret_password) 
	* 
	* @var string 
	*/  
	private $_credential;  


	/** 
	* @param string $i 
	*/  
	public function setIdentity($i)  
	{  
		$this->_identity = $i;  
	}  

	/** 
	* @param string $c 
	*/  
	public function setCredential($c)  
	{  
		$this->_credential = $c;  
	}


	function authenticate() {
		$em = Zend_Registry::get('EntityManager');

		$query = $em->createQuery("select u from Entity\User u WHERE (u.username = :identity  OR u.email = :identity) AND u.status = 1")
			->setParameter('identity', $this->_identity);

		try {

			$userArr = $query->getSingleResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
			$hashedPassword = md5($this->_credential);

			if ($hashedPassword == $userArr['password']) {

				$user = $em->getRepository('Entity\User')->findOneById($userArr['id']);
				$user->lastlogin = date();


				$em->persist($user);
				$em->flush();
				
				return new Zend_Auth_Result(Zend_Auth_Result::SUCCESS, unserialize (serialize ($userArr)), array('Login successful!'));

			} else {
				// wrong password
				return new Zend_Auth_Result(Zend_Auth_Result::FAILURE_CREDENTIAL_INVALID, null, array('Wrong password!'));
			}
		} catch (NonUniqueResultException $e) {
			// non unique result
			return new Zend_Auth_Result(Zend_Auth_Result::FAILURE, null, array('Wrong username or password'));
		} catch (NoResultException $e) {
			// no result found
			return new Zend_Auth_Result(Zend_Auth_Result::FAILURE_IDENTITY_NOT_FOUND, null, array('User not found!'));
		} catch (Exception $e) {
			// exception occured
			return new Zend_Auth_Result(Zend_Auth_Result::FAILURE, null, array('Wrong username or password'));
		}
	}
} 
