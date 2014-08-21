<?php

namespace frontend\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * Récupère la liste des articles; Si techno_id est null on affiche tout Sinon on filtre sur la techno
     * @param int $techno_id
     * @return Render
     */
    public function indexAction($techno_id = NULL)
    {      
        $this->page_title = "Blog de mthomas";
        
        if($techno_id == null){            
            if( $this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') ){                
                $this->articles = $this->getDoctrine()->getRepository('BlogBundle:blog')->findBy(array(), array('created' => 'DESC'));
            }
            else{
                $this->articles = $this->getDoctrine()->getRepository('BlogBundle:blog')->findBy(array("isPublish" => 1), array('created' => 'DESC'));
            }
            
        }
        else{
            $this->articles = $this->getDoctrine()->getRepository('BlogBundle:blog')->findBy(array("techno" => $techno_id), array('created' => 'DESC'));
        }
        
        $this->technos = $this->getDoctrine()->getRepository('BlogBundle:BlogTechno')->findAll();
        return $this->render('BlogBundle:Default:index.html.twig',
                            array("page_title" => $this->page_title,
                                  "articles" => $this->articles,
                                  "technos" => $this->technos,
                                  "techno_id" => $techno_id));
    }
    
    public function showAction($blog_id)
    {
        $blog = $this->get('blog.blog_manager')->loadBlog($blog_id);
        if($blog != null){
            $page_title = $blog->getTitle();
            $this->technos = $this->getDoctrine()->getRepository('BlogBundle:BlogTechno')->findAll();
            return $this->render('BlogBundle:Default:show.html.twig',
                                 array( "blog" => $blog,
                                        "page_title" => $page_title,
                                        "technos" => $this->technos));
        }
        else{
            return new Response('Page introuvable !!');
        }
        
    }
    
    public function downloadAction($name_file){
        // Variable $name_file envoyé en GET correspondant au nom du fichier
        // On récupère l'archive dans le dossier adéquat
        $archive_file = $this->get('kernel')->getRootDir()."/../web/Source/".$name_file;
        
        // On instancie l'Objet Response afin modifier l'entête HTTP pour forcer le Download
        $response = new Response();
        // Le content-Type dépend du fichier téléchargeable
        $response->headers->set('Content-Type','application/zip');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . basename($archive_file) . '"');        
        $response->headers->set('Pragma', "no-cache");
        $response->headers->set('Expires', "0");
        $response->headers->set('Content-Transfer-Encoding', "binary");
        $response->sendHeaders();
        $response->setContent(readfile($archive_file));
        // On retourne la nouvelle entête HTTP
        return $response;
    }
}
