<?php

namespace Digin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DiginUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
