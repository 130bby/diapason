<?php

namespace Digin\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Digin\UserBundle\Entity\ContexteSocial;
use Digin\UserBundle\Form\ContexteSocialType;

/**
 * ContexteSocial controller.
 *
 * @Route("/contextesocial")
 */
class ContexteSocialController extends Controller
{
    /**
     * Lists all ContexteSocial entities.
     *
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DiginUserBundle:ContexteSocial')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a ContexteSocial entity.
     *
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:ContexteSocial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ContexteSocial entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new ContexteSocial entity.
     *
     * @Template()
     */
    public function newAction()
    {
        $entity = new ContexteSocial();
        $form   = $this->createForm(new ContexteSocialType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new ContexteSocial entity.
     *
     * @Route("/create", name="contextesocial_create")
     * @Method("POST")
     * @Template("DiginUserBundle:ContexteSocial:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new ContexteSocial();
        $form = $this->createForm(new ContexteSocialType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contextesocial_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing ContexteSocial entity.
     *
     * @Route("/edit", name="contextesocial_edit")
     * @Template()
     */
    public function editAction()
    {
        $id = $user = $this->container->get('security.context')->getToken()->getUser()->getContexteSocial()->getId();

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:ContexteSocial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ContexteSocial entity.');
        }

        $editForm = $this->createForm(new ContexteSocialType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing ContexteSocial entity.
     *
     * @Route("/{id}/update", name="contextesocial_update")
     * @Method("POST")
     * @Template("DiginUserBundle:ContexteSocial:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:ContexteSocial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ContexteSocial entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ContexteSocialType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contextesocial_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a ContexteSocial entity.
     *
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DiginUserBundle:ContexteSocial')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ContexteSocial entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contextesocial'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
