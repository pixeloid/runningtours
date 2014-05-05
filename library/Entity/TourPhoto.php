<?php

namespace Entity;

use Doctrine\ORM\EntityRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tour_photos")
 */
class TourPhoto extends Base
{

    
	/**
     * @ORM\ManyToOne(targetEntity="Entity\File")
     */
	protected $file;
	
	/**
     * @ORM\ManyToOne(targetEntity="Entity\Tour", inversedBy="tourphotos")
     */
	protected $tour;
	
	
}
