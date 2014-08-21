<?php

namespace Backend\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction($name = "Mathieu")
    {        
        return $this->render('BackendAdminBundle:Default:index.html.twig', array('name' => $name));
    }
    public function loginAction()
    {
       // get the error if any (works with forward and redirect -- see below)
      if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
          $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
      } else {
          $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
      }
 
      return $this->render('BackendAdminBundle:Default:login.html.twig', array(
          // last username entered by the user
          'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
          'error' => $error,
      ));      
    }
}
