<?php

namespace Digin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
			$userManager = $this->container->get('fos_user.user_manager');
			$tbc_user = $userManager->findUserByEmail($email);
			// $tbc_user = $this->getDoctrine()->getEntityManager()->getRepository('DiginUserBundle:User')->findBy(array('id' => $id));
			$tbc_user->addRole('CONFIRMED_USER');
			$this->getDoctrine()->getEntityManager()->persist( $tbc_user );
			$this->getDoctrine()->getEntityManager()->flush();
		}
		$all_users = $this->getDoctrine()->getEntityManager()->getRepository('DiginUserBundle:User')->findAll();
		$users = array();
		foreach($all_users as $user){
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
