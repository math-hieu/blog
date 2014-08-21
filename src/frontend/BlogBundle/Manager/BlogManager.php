<?php

namespace frontend\BlogBundle\Manager;

use Doctrine\ORM\EntityManager;
use frontend\BlogBundle\Manager\BaseManager;
use frontend\BlogBundle\Entity\blog;

class BlogManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function loadBlog($blog_id) {
        return $this->getRepository()
                ->findOneBy(array('id' => $blog_id));
    }

    /**
    * Save Desk entity
    *
    * @param Desk $desk 
    */
    public function saveBlog(blog $blog)
    {
        $this->persistAndFlush($blog);
    }

    public function getPreviousDesk($blog_id) {
        return $this->getRepository()
                ->getAdjacentDesk($blog_id, false)
                ->getQuery()
                ->setMaxResults(1)
                ->getOneOrNullResult();
    }

    public function getNextDesk($blog_id) {
        return $this->getRepository()
                ->getAdjacentDesk($blog_id, true)
                ->getQuery()
                ->setMaxResults(1)
                ->getOneOrNullResult();
    }


    public function getRepository()
    {
        return $this->em->getRepository('BlogBundle:blog');
    }

}