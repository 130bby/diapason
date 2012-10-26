<?php

namespace Digin\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DiginHomeBundle:Default:index.html.twig');
    }

    public function diapasonAction()
    {
        return $this->render('DiginHomeBundle:Default:diapason.html.twig');
    }

     public function cfaAction()
    {
        return $this->render('DiginHomeBundle:Default:cfa_jean_belloc.html.twig');
    }

     public function conseilRegionalAction()
    {
        return $this->render('DiginHomeBundle:Default:conseil_regional_guadeloupe.html.twig');
    }

     public function association3adAction()
    {
        return $this->render('DiginHomeBundle:Default:association_3ad.html.twig');
    }

    public function contactAction()
    {
        return $this->render('DiginHomeBundle:Default:contact.html.twig');
    }
}
