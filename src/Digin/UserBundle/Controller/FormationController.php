<?php

namespace Digin\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Digin\UserBundle\Entity\Formation;
use Digin\UserBundle\Form\FormationType;

/**
 * Formation controller.
 *
 * @Route("/formation")
 */
class FormationController extends Controller
{
    /**
     * Lists all Formation entities.
     *
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DiginUserBundle:Formation')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Formation entity.
     *
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Formation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Formation entity.
     *
     * @Template()
     */
    public function newAction()
    {
        $entity = new Formation();
        $form   = $this->createForm(new FormationType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Formation entity.
     *
     * @Route("/create", name="formation_create")
     * @Method("POST")
     * @Template("DiginUserBundle:Formation:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Formation();
        $form = $this->createForm(new FormationType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formation_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Formation entity.
     *
     * @Route("/edit", name="formation_edit")
     * @Template()
     */
    public function editAction()
    {
        $id = $user = $this->container->get('security.context')->getToken()->getUser()->getFormation()->getId();

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Formation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        $editForm = $this->createForm(new FormationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Formation entity.
     *
     * @Route("/{id}/update", name="formation_update")
     * @Method("POST")
     * @Template("DiginUserBundle:Formation:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Formation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FormationType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('formation_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Formation entity.
     *
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DiginUserBundle:Formation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Formation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('formation'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
