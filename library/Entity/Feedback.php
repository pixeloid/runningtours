<?php

namespace Entity;

use Doctrine\ORM\EntityRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="feedback")
 */
class Feedback extends Base
{

	/**
	 * @ORM\Column(type="string", name="author", length=255, unique=false, nullable=true)
	 */
	protected $author = null;
	
	
	
	/**
	 * @ORM\Column(type="text", name="description")
	 */
	protected $description = '';

    
}
