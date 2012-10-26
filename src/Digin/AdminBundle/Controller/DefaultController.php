<?php

namespace Digin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Digin\UserBundle\Mailer\TwigSwiftMailer as TwigSwiftMailer;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
		return $this->container->get('templating')->renderResponse('DiginAdminBundle:Default:index.html.'.$this->container->getParameter('fos_user.template.engine'), array('user' => $user));
    }
    public function confirmAction($email = null)
    {
		if (!is_null($email))
		{
			// On ajoute le role "CONFIRMED_USER" a l utilisateur
			$tbc_user = $this->container->get('fos_user.user_manager')->findUserByEmail($email);
			$tbc_user->addRole('CONFIRMED_USER');
			$this->getDoctrine()->getEntityManager()->persist( $tbc_user );
			$this->getDoctrine()->getEntityManager()->flush();
            $mailer = new TwigSwiftMailer();
			$mailer->sendConfirmationCFAMessage($tbc_user);
		}

		//recuperation de la liste des utilisateurs a confirmer
		$users = array();
		$all_users = $this->getDoctrine()->getEntityManager()->getRepository('DiginUserBundle:User')->findAll();
		foreach($all_users as $user){
			if ($user->isEnabled())
				foreach($user->getRoles() as $role){
					if($role == "CONFIRMED_USER" || $role == "ROLE_CFA" || $role == "ROLE_3AD"){
						continue(2);
					}
					$users[] = $user;
				}
        }
		return $this->container->get('templating')->renderResponse('DiginAdminBundle:Default:confirm.html.'.$this->container->getParameter('fos_user.template.engine'), array('users' => $users));
		
    }
}
