<?php

namespace Digin\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DiginHomeBundle:Default:index.html.twig');
    }
}
