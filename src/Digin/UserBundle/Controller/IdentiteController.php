<?php

namespace Digin\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Digin\UserBundle\Entity\Identite;
use Digin\UserBundle\Form\IdentiteType;

/**
 * Identite controller.
 *
 * @Route("/identite")
 */
class IdentiteController extends Controller
{
    /**
     * Lists all Identite entities.
     *
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DiginUserBundle:Identite')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Identite entity.
     *
     * @Template()
     */
    public function showAction($id)
    {
		$em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Identite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Identite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Identite entity.
     *
     * @Template()
     */
    public function newAction()
    {
        $entity = new Identite();
        $form   = $this->createForm(new IdentiteType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Identite entity.
     *
     * @Route("/create", name="identite_create")
     * @Method("POST")
     * @Template("DiginUserBundle:Identite:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Identite();
        $form = $this->createForm(new IdentiteType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('identite_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Identite entity.
     *
     * @Route("/edit", name="identite_edit")
     * @Template()
     */
    public function editAction()
    {
        $id = $user = $this->container->get('security.context')->getToken()->getUser()->getIdentite()->getId();

		$em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Identite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Identite entity.');
        }

        $editForm = $this->createForm(new IdentiteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Identite entity.
     *
     * @Route("/{id}/update", name="identite_update")
     * @Method("POST")
     * @Template("DiginUserBundle:Identite:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Identite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Identite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new IdentiteType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('profil'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Identite entity.
     *
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DiginUserBundle:Identite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Identite entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('identite'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
