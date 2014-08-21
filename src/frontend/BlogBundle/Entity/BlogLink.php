<?php

namespace frontend\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogLink
 *
 * @ORM\Table(name="blog_link")
 * @ORM\Entity
 */
class BlogLink
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
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=500, nullable=false)
     */
    private $link;


}
