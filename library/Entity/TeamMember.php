<?php

namespace Entity;

use Doctrine\ORM\EntityRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="team_member")
 */
class TeamMember extends Base
{

	/**
	 * @ORM\Column(type="string", name="name", length=255, unique=false, nullable=true)
	 */
	protected $name = null;

	/**
	 * @ORM\Column(type="string", name="image", length=255, unique=false, nullable=true)
	 */
	protected $image = null;
	
	/**
	 * @ORM\Column(type="text", name="description")
	 */
	protected $description = '';

	/**
     * @ORM\OneToMany(targetEntity="Entity\TeamMemberPhoto", mappedBy="member", cascade={"persist"}, orphanRemoval=true)
     */
	protected $photos;
	
    public function __construct() {
        $this->photos = new \Doctrine\Common\Collections\ArrayCollection();
    }
	
    
}
