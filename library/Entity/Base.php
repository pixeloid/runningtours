<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;


class Base
{	
	
	protected $em;
	
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id = null;


    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @var datetime $updated
     *
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    protected $updated;


	/**
	 *  A way to force eager loading.
	 */
	public function forceEagerLoad() {
		return true;
	}

	public function toArray() {
		
	    $tmpMergedMappings = array();
	    $tmpFieldMappings = array();
	    $tmpAssocMappings = array();
	    if(!$this->em) { $this->em = \Zend_Registry::get('EntityManager'); }

	    $tmpFieldMappings = $this->em->getClassMetadata(get_class($this))->fieldMappings;
	    $tmpAssocMappings = array_keys($this->em->getClassMetadata(get_class($this))->associationMappings);

	    foreach($tmpFieldMappings as $fmKey => $fmValue) {
	        if(is_object($this->$fmKey)) {
	            if (get_class($this->$fmKey) == "DateTime" ) {
	                switch ($tmpFieldMappings[$fmKey]["type"]) {
	                    case "sndatetype":
	                        $tmpMergedMappings[$fmKey] = $this->$fmKey->format('m/d/Y');
	                        break;
	                    // handle any custom types..
	                    default:
	                        $tmpMergedMappings[$fmKey] = $this->$fmKey->format('Y-m-d H:i:s');
	                        break;
	                }
	            } else {
	                // presume the default _id mapping...
	                $key_id = $fmKey."_id";
	                $tmpMergedMappings[$key_id] = $this->$key_id->id;
	            }
	        } else {
	            $tmpMergedMappings[$fmKey] = $this->$fmKey;
	        }
	    }
	    foreach($tmpAssocMappings as $amKey => $amValue) {
	       $tmpKey = $amValue."_id";
	
	        switch (get_class($this->$amValue)) {
	            case "Doctrine\ORM\PersistentCollection":
	                // dont do anything with these right now..
	                break;
	            default:
	                // Trigger the loading via the proxy.
	                if(method_exists($this->$amValue, 'forceEagerLoad')) {
	                    $forced = $this->$amValue->forceEagerLoad();
	                } else {
	                    // Note: these classes dont have/inherit a forceEagerLoad() method,
	                    // or we are trying to call it on something not set yet.
	                    //var_dump(get_class($this->$amValue));
	                    //var_dump($amValue);
	                }
	                if($this->$amValue) {
	                    if(isset($this->$amValue->id) && $this->$amValue->id != null) {
	                        $tmpMergedMappings[$tmpKey] = $this->$amValue->id;
	                    }
	                }
	            break;
	        }
	    }
	    return $tmpMergedMappings;

	}
    public function __get($property) 
    { 	
	
        // If a method exists to get the property call it. 
        if(method_exists($this, 'get' . ucfirst($property))) 
        { 	
		
            // This will call $this->getCoffee() while getting $this->coffee 
            return call_user_func(array($this, 'get' . ucfirst($property))); 
        } 
        else 
        { 
            return $this->$property; 
        } 
    } 
     
    public function __set($property, $value) 
    { 
        // If a method exists to set the property call it. 
        if(method_exists($this, 'set' . ucfirst($property))) 
        { 
            // This will call $this->setCoffee($value) while setting $this->coffee 
            return call_user_func(array($this, 'set' . ucfirst($property)), $value); 
        } 
        else 
        { 
            $this->$property = $value; 
        } 
    } 
    
	

}