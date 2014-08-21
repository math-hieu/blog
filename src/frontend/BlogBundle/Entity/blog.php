<?php

namespace frontend\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table(name="blog")
 * @ORM\Entity
 */
class Blog
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
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255, nullable=true)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var string
     *
     * @ORM\Column(name="name_file", type="string", length=500, nullable=true)
     */
    private $nameFile;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_publish", type="boolean", nullable=false)
     */
    private $isPublish;

    /**
     * @var \BlogTechno
     *
     * @ORM\ManyToOne(targetEntity="BlogTechno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="techno_id", referencedColumnName="id")
     * })
     */
    private $techno;

    /**
     * @var \BlogType
     *
     * @ORM\ManyToOne(targetEntity="BlogType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;



    /**
     * Set title
     *
     * @param string $title
     * @return Blog
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Blog
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Blog
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Blog
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Blog
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set nameFile
     *
     * @param string $nameFile
     * @return Blog
     */
    public function setNameFile($nameFile)
    {
        $this->nameFile = $nameFile;
    
        return $this;
    }

    /**
     * Get nameFile
     *
     * @return string 
     */
    public function getNameFile()
    {
        return $this->nameFile;
    }

    /**
     * Set isPublish
     *
     * @param boolean $isPublish
     * @return Blog
     */
    public function setIsPublish($isPublish)
    {
        $this->isPublish = $isPublish;
    
        return $this;
    }

    /**
     * Get isPublish
     *
     * @return boolean 
     */
    public function getIsPublish()
    {
        return $this->isPublish;
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

    /**
     * Set type
     *
     * @param \frontend\BlogBundle\Entity\BlogType $type
     * @return Blog
     */
    public function setType(\frontend\BlogBundle\Entity\BlogType $type = null)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return \frontend\BlogBundle\Entity\BlogType 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set techno
     *
     * @param \frontend\BlogBundle\Entity\BlogTechno $techno
     * @return Blog
     */
    public function setTechno(\frontend\BlogBundle\Entity\BlogTechno $techno = null)
    {
        $this->techno = $techno;
    
        return $this;
    }

    /**
     * Get techno
     *
     * @return \frontend\BlogBundle\Entity\BlogTechno 
     */
    public function getTechno()
    {
        return $this->techno;
    }
    
    public function getIsNew(){
        $now = new \DateTime("now");
        if($this->created->diff($now)->days > 10){
            return false;
        }
        else{
            return true;
        }
    }
}