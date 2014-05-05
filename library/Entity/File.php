<?php

namespace Entity;

use Doctrine\ORM\EntityRepository ;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="files")
 */
class File extends Base
{

    /**
     * @ORM\Column(type="string", name="caption", length=255, nullable=true)
     */
    protected $caption = null;
	
	/**
	 * @ORM\Column(type="text", name="description")
	 */
	protected $description = '';
	
	/**
	 * @ORM\Column(type="string", name="filename", length=150, unique=false, nullable=true)
	 */
	protected $filename = null;
	
	/**
	 * @ORM\Column(type="string", name="thumb200", length=150, unique=false, nullable=true)
	 */
	protected $thumb200 = null;
	
	
	/**
	 * @ORM\Column(type="string", name="sessionid", length=100, unique=false, nullable=true)
	 */
	protected $sessionid = null;
	
	
	/**
     * @Gedmo\Slug(fields={"caption"})
	 * @ORM\Column(type="string", name="slug", length=255, unique=false, nullable=true)
	 */
    protected $slug;
	
	/**
     * @ORM\OneToMany(targetEntity="Entity\TourPhoto", mappedBy="file", cascade={"persist", "remove"})
     */
	protected $tourphotos;
	
	/**
     * @ORM\OneToMany(targetEntity="Entity\TeamMemberPhoto", mappedBy="file", cascade={"persist", "remove"})
     */
	protected $memberphotos;
	




	
	public function __construct() {
	    $this->tourphotos = new \Doctrine\Common\Collections\ArrayCollection();
	    $this->memberphotos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
	}
