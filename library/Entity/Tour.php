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
 	* @ORM\Column(type="integer", name="distance", unique=false, nullable=false)
 	*/
	protected $distance = null;

	/**
 	* @ORM\Column(type="boolean", name="onlyinaday", unique=false, nullable=true)
 	*/
	protected $onlyinaday = null;


	/**
	 * @ORM\Column(type="integer", name="hours", nullable=false)
	 */
	protected $hours = null;

	/**
	 * @ORM\Column(type="array", name="prices", nullable=false)
	 */
	protected $prices = null;
	
	
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
	
	public function getPriceFor($num)
	{
		$prices = array(
			$this->prices[0],
			$this->prices[1],
			$this->prices[1],
			$this->prices[2],
			$this->prices[2]
		);

		return $prices[$num - 1];

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
