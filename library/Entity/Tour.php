<?php

namespace Entity;

use Doctrine\ORM\EntityRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tour")
 */
class Tour extends Base
{

	/**
	 * @ORM\Column(type="string", name="title", length=255, unique=false, nullable=true)
	 */
	protected $title = null;
	
	
	/**
	 * @ORM\Column(type="text", name="brief")
	 */
	protected $brief = '';
	
	
	/**
	 * @ORM\Column(type="text", name="description")
	 */
	protected $description = '';

	/**
	 * @ORM\Column(type="text", name="stops")
	 */
	protected $stops = '';
	
	/**
 	* @ORM\Column(type="string", length=20, name="day", unique=false, nullable=false)
 	*/
	protected $day = null;

	/**
 	* @ORM\Column(type="integer", name="distance", unique=false, nullable=false)
 	*/
	protected $distance = null;


	/**
	 * @ORM\Column(type="time", name="hour", nullable=false)
	 */
	protected $hour = null;
	
	
	/**
     * @ORM\OneToMany(targetEntity="Entity\Reservation", mappedBy="tour")
     */
	protected $reservations;

    
	/**
     * @ORM\OneToMany(targetEntity="Entity\TourPhoto", mappedBy="tour", cascade={"persist"}, orphanRemoval=true)
     */
	protected $photos;
	
    public function __construct() {
        $this->photos = new \Doctrine\Common\Collections\ArrayCollection();
    }
	
	
	public function getStops()
	{
		return array_filter(explode("\n", $this->stops));
	}
    
	public function setHour($hour='')
	{
		$this->hour = new \DateTime($hour);
	}
	
	public function getHour()
	{
		return $this->hour->format('H:i:s');
	
	}
	
	
	public function getDayString()
	{	
		$days = array();

		foreach (explode('|', $this->day) as $day) {
			$days[] = date('l', strtotime("Sunday + $day Days"));
		}
		return implode($days, ', ');
	}
}
