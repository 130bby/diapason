<?php

namespace Digin\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Digin\UserBundle\Entity\Mobilite;
use Digin\UserBundle\Form\MobiliteType;

/**
 * Mobilite controller.
 *
 * @Route("/mobilite")
 */
class MobiliteController extends Controller
{
    /**
     * Lists all Mobilite entities.
     *
     * @Route("/", name="mobilite")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DiginUserBundle:Mobilite')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Mobilite entity.
     *
     * @Route("/{id}/show", name="mobilite_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Mobilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mobilite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Mobilite entity.
     *
     * @Route("/new", name="mobilite_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Mobilite();
        $form   = $this->createForm(new MobiliteType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Mobilite entity.
     *
     * @Route("/create", name="mobilite_create")
     * @Method("POST")
     * @Template("DiginUserBundle:Mobilite:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Mobilite();
        $form = $this->createForm(new MobiliteType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mobilite_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Mobilite entity.
     *
     * @Route("/{id}/edit", name="mobilite_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Mobilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mobilite entity.');
        }

        $editForm = $this->createForm(new MobiliteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Mobilite entity.
     *
     * @Route("/{id}/update", name="mobilite_update")
     * @Method("POST")
     * @Template("DiginUserBundle:Mobilite:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Mobilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mobilite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MobiliteType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mobilite_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Mobilite entity.
     *
     * @Route("/{id}/delete", name="mobilite_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DiginUserBundle:Mobilite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Mobilite entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mobilite'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
