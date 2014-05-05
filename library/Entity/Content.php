<?php
namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Translatable;

/**
 * @ORM\Entity
 * @ORM\Table(name="content")
 * @Gedmo\TranslationEntity(class="Entity\ContentTranslation")
 */
class Content extends Base  implements Translatable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
    */
    protected $id = null;
	

	/**
	 * @ORM\Column(type="text", name="content")
	 */
	protected $content = '';
	
    
	/**
	 * @ORM\Column(type="string", name="title", length=266, unique=false, nullable=false)
	 */
	protected $title = null;
	
	
	
	/**
     * @Gedmo\Slug(fields={"title"})
     * @Gedmo\Translatable
	 * @ORM\Column(type="string", name="slug", length=255, unique=false, nullable=false)
	 */
    protected $slug;
    
	// /**
	//      * @ORM\ManyToMany(targetEntity="File", inversedBy="contents", cascade={"persist", "remove"})
	//  */
	// protected $files = null;



	
    public function __construct() {
        $this->metavalues = new \Doctrine\Common\Collections\ArrayCollection();
     //   $this->files = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
	public function removeMetaValues()
	{
		foreach ($this->metavalues as $index=>$metavalue) {
			unset($this->metavalues[$index]);
		}
	}
	
	public function addTranslation(ContentTranslation $t)
    {
        if (!$this->translations->contains($t)) {
            $this->translations[] = $t;
            $t->setObject($this);
        }
    }
    

}



