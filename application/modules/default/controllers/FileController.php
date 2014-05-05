<?php

class FileController extends Zend_Controller_Action
{
	private $em;
	private $request;




	public function init()
	{	

		$this->em = Zend_Registry::get('EntityManager');
		$this->request = $this->getRequest();
		

	    $this->isAdmin = Zend_Auth::getInstance()->hasIdentity();
		$this->view->isAdmin = $this->isAdmin;
	}


	public function deleteFileAction()
	{
		$id = $this->_getParam('id');
		$file = $this->em->getRepository('Entity\File')->findOneById($id);
		$this->em->remove($file);
		$this->em->flush();
		
		$this->_helper->redirector->gotoUrl($_SERVER['HTTP_REFERER']);
	}

	public function uploadAction()
	{
		
		$uploadHandler = new App_Plupload_Handler('uploads');
		
		


			$this->_helper->layout->disableLayout();
			$this->_helper->ViewRenderer->setNoRender();
		
			$file = $uploadHandler->doUpload();
			
			if($file)
			{	
				$photo = new Entity\File();
				$photo->filename = 	$photo->title = $file;
				//$photo->sessionid = $type . '-' . $sessId;
				$this->em->persist($photo);
				$this->em->flush();
			}

		
			return $this->_helper->json($photo->toArray());
		
			//$this->view->pendingPhotos = $this->em->getRepository('Entity\File')->findBySessionid($type . '-' . $sessId);
		
	}

}

