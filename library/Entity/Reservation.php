<?php

namespace Entity;

use Doctrine\ORM\EntityRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="reservations")
 */
class Reservation extends Base
{

	/**
	 * @ORM\Column(type="string", name="title", length=255, unique=false, nullable=true)
	 */
	protected $email = null;
	
	
	/**
	 * @ORM\Column(type="string", name="firstname", length=255, unique=false, nullable=true)
	 */
	protected $firstname = null;
	
	
	/**
	 * @ORM\Column(type="string", name="lastname", length=255, unique=false, nullable=true)
	 */
	protected $lastname = null;
	

	/**
	 * @ORM\Column(type="string", name="gender", length=5, unique=false, nullable=true)
	 */
	protected $gender = null;

	/**
	 * @ORM\Column(type="string", name="phone", length=20, unique=false, nullable=true)
	 */
	protected $phone = null;
	
	
	/**
     * @ORM\ManyToOne(targetEntity="Entity\Tour", inversedBy="reservations")
     */
	protected $tour;
    
/**
 * @ORM\Column(type="integer", name="persons", unique=false, nullable=false)
 */
protected $persons = null;
	
	/**
	 * @ORM\Column(type="text", name="message")
	 */
	protected $message = '';
	
	
	/**
 	* @ORM\Column(type="datetime", name="date", unique=false, nullable=false)
 	*/
	protected $date = null;

	
    
	public function setDate($date='')
	{
		$this->date = new \DateTime($date);
	}
	
	public function getDate()
	{
		return $this->date->format('Y-m-d H:i:s');
	
	}
	
	
	public function getDayString()
	{
		return date('l', strtotime("Sunday + $this->day Days"));
	}
}
