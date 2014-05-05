<?php

namespace Entity;

use Doctrine\ORM\EntityRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="team_member_photos")
 */
class TeamMemberPhoto extends Base
{

    
	/**
     * @ORM\ManyToOne(targetEntity="Entity\File", cascade={"persist"})
     */
	protected $file;
	
	/**
     * @ORM\ManyToOne(targetEntity="Entity\TeamMember", inversedBy="memberphotos")
     */
	protected $member;
	
	
}
