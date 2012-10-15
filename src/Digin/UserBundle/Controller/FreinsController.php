<?php

namespace Digin\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Digin\UserBundle\Entity\Freins;
use Digin\UserBundle\Form\FreinsType;

/**
 * Freins controller.
 *
 * @Route("/freins")
 */
class FreinsController extends Controller
{
    /**
     * Lists all Freins entities.
     *
     * @Route("/", name="freins")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DiginUserBundle:Freins')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Freins entity.
     *
     * @Route("/{id}/show", name="freins_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Freins')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Freins entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Freins entity.
     *
     * @Route("/new", name="freins_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Freins();
        $form   = $this->createForm(new FreinsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Freins entity.
     *
     * @Route("/create", name="freins_create")
     * @Method("POST")
     * @Template("DiginUserBundle:Freins:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Freins();
        $form = $this->createForm(new FreinsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('freins_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Freins entity.
     *
     * @Route("/{id}/edit", name="freins_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Freins')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Freins entity.');
        }

        $editForm = $this->createForm(new FreinsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Freins entity.
     *
     * @Route("/{id}/update", name="freins_update")
     * @Method("POST")
     * @Template("DiginUserBundle:Freins:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Freins')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Freins entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FreinsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('freins_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Freins entity.
     *
     * @Route("/{id}/delete", name="freins_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DiginUserBundle:Freins')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Freins entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('freins'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
