<?php

namespace frontend\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogTechno
 *
 * @ORM\Table(name="blog_techno")
 * @ORM\Entity
 */
class BlogTechno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="techno", type="string", length=200, nullable=false)
     */
    private $techno;



    /**
     * Set techno
     *
     * @param string $techno
     * @return BlogTechno
     */
    public function setTechno($techno)
    {
        $this->techno = $techno;
    
        return $this;
    }

    /**
     * Get techno
     *
     * @return string 
     */
    public function getTechno()
    {
        return $this->techno;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function __toString(){
        return $this->techno;
    }
}