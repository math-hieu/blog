<?php

namespace frontend\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JMS\SecurityExtraBundle\Annotation\Secure;

use frontend\BlogBundle\Entity\blog;
use frontend\BlogBundle\Form\blogType;

class AdminBlogController extends Controller
{
    /**
    * @Secure(roles="ROLE_ADMIN")
    */
    public function addAction()
    {
        $request = $this->get('request');
        $article = new blog();
        $form = $this->createForm(new blogType, $article);
        $this->technos = $this->getDoctrine()->getRepository('BlogBundle:BlogTechno')->findAll();
        if ('POST' == $request->getMethod()) {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $this->get('blog.blog_manager')->saveBlog($article);
                $this->get('session')->setFlash('notice',"L'article a été ajouté avec succès!");
            }
        }
        
        $page_title = "Ajout d'un article";
        return $this->render('BlogBundle:Default:edit.html.twig',
                            array('form' => $form->createView(),
                                  'page_title' => $page_title,
                                   "blog" => $article,
                                    "technos" => $this->technos));
    }
    /**
    * @Secure(roles="ROLE_ADMIN")
    */
    public function editAction($blog_id)
    {
        $request = $this->get('request');
        $page_title = "Edition d'un article";
        $this->technos = $this->getDoctrine()->getRepository('BlogBundle:BlogTechno')->findAll();
        // On vérifie que l'ID du bureau existe
        if (!$blog = $this->get('blog.blog_manager')->loadBlog($blog_id)) {
            throw new NotFoundHttpException(
                $this->get('translator')->trans('This article does not exist.')
            );
        }
       
        $form = $this->createForm(new blogType, $blog);

        if ('POST' == $request->getMethod()) {
            $form->bindRequest($request);
            if ($form->isValid()) {
                
                $this->get('blog.blog_manager')->saveBlog($blog);
                
                $this->get('session')->setFlash('notice',"L'article a été modifié avec succès!");
                                
            }
        }

       return $this->render('BlogBundle:Default:edit.html.twig',
                            array(  'form' => $form->createView(),
                                    'page_title' => $page_title,
                                    'blog' => $blog,
                                    'technos' => $this->technos));
    }
}
?>
