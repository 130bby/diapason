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

    public function contactAction()
    {
        return $this->render('DiginHomeBundle:Default:contact.html.twig');
    }
}
