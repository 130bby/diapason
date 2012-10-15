<?php

namespace Digin\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Digin\UserBundle\Entity\Preparation;
use Digin\UserBundle\Form\PreparationType;

/**
 * Preparation controller.
 *
 * @Route("/preparation")
 */
class PreparationController extends Controller
{
    /**
     * Lists all Preparation entities.
     *
     * @Route("/", name="preparation")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DiginUserBundle:Preparation')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Preparation entity.
     *
     * @Route("/{id}/show", name="preparation_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Preparation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Preparation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Preparation entity.
     *
     * @Route("/new", name="preparation_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Preparation();
        $form   = $this->createForm(new PreparationType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Preparation entity.
     *
     * @Route("/create", name="preparation_create")
     * @Method("POST")
     * @Template("DiginUserBundle:Preparation:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Preparation();
        $form = $this->createForm(new PreparationType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('preparation_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Preparation entity.
     *
     * @Route("/{id}/edit", name="preparation_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Preparation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Preparation entity.');
        }

        $editForm = $this->createForm(new PreparationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Preparation entity.
     *
     * @Route("/{id}/update", name="preparation_update")
     * @Method("POST")
     * @Template("DiginUserBundle:Preparation:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Preparation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Preparation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PreparationType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('preparation_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Preparation entity.
     *
     * @Route("/{id}/delete", name="preparation_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DiginUserBundle:Preparation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Preparation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('preparation'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
