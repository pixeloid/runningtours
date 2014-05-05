<?php

class AboutController extends Zend_Controller_Action
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



	public function indexAction()
	{
		$this->view->teamMembers = $this->em->getRepository('Entity\TeamMember')->findAll();
	}
	
	public function editAction()
	{	
		
		if(!$this->isAdmin) $this->_helper->redirector->gotoRoute(array('action' => 'index'));
		
		
		$form = new App_Form_TeamMember;
		
		$id = $this->getRequest()->getParam('id', 1);
		$entity = $this->em->getRepository('Entity\TeamMember')->findOneById($id);
		
		$entityArray = $entity->toArray();

		$form->populate($entityArray);



        if ($this->_request->isPost()) {

            $formData = $this->_request->getPost();
				
            if ($form->isValid($formData)) {
				
				$entity->description = $formData['description'];
				$entity->name = $formData['name'];
				
				$entity->photos->clear();
				
				foreach(explode(',', $formData['photos']) as $id)
				{
					$file = $this->em->getRepository('Entity\File')->findOneById($id);
					if(!$file) continue;

					$photo = new Entity\TeamMemberPhoto;
					$photo->file = $file;
					$photo->member = $entity;
					$entity->photos->add($photo);
				}
				
                $this->em->persist($entity);
                $this->em->flush();
				
				$this->_helper->redirector->gotoRoute(array('action' => 'index'));
				
            }

        }

		$fileids = array();
		foreach ($entity->photos as $photo) {
			if(!$photo->file) continue;
			$fileids[] = $photo->file->id;
		}
		$form->setDefaults(array('photos' => implode(',', $fileids)));


		$this->view->teamMember = $entity;
		$this->view->form = $form;
	}


	public function addAction()
	{	
		
		if(!$this->isAdmin) $this->_helper->redirector->gotoRoute(array('action' => 'index'));
		
		
		$form = new App_Form_TeamMember;
		

        if ($this->_request->isPost()) {

            $formData = $this->_request->getPost();
				
			
            if ($form->isValid($formData)) {
				
				$entity = new Entity\TeamMember;
				
				$entity->description = $formData['description'];
				$entity->name = $formData['name'];
                $this->em->persist($entity);
                $this->em->flush();
				
				$this->_helper->redirector->gotoRoute(array('action' => 'index'));
				
            }

        }

		$this->view->form = $form;
	}
	
	public function deleteAction()
	{	
		$id = $this->getRequest()->getParam('id', 1);
		$entity = $this->em->getRepository('Entity\TeamMember')->findOneById($id);
        $this->em->remove($entity);
        $this->em->flush();
		$this->_helper->redirector->gotoRoute(array('action' => 'index'));
		
	}

}

