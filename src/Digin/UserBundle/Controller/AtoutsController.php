<?php

namespace Digin\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Digin\UserBundle\Entity\Atouts;
use Digin\UserBundle\Form\AtoutsType;

/**
 * Atouts controller.
 *
 * @Route("/atouts")
 */
class AtoutsController extends Controller
{
    /**
     * Lists all Atouts entities.
     *
     * @Route("/", name="atouts")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DiginUserBundle:Atouts')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Atouts entity.
     *
     * @Route("/{id}/show", name="atouts_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Atouts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Atouts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Atouts entity.
     *
     * @Route("/new", name="atouts_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Atouts();
        $form   = $this->createForm(new AtoutsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Atouts entity.
     *
     * @Route("/create", name="atouts_create")
     * @Method("POST")
     * @Template("DiginUserBundle:Atouts:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Atouts();
        $form = $this->createForm(new AtoutsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('atouts_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Atouts entity.
     *
     * @Route("/{id}/edit", name="atouts_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Atouts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Atouts entity.');
        }

        $editForm = $this->createForm(new AtoutsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Atouts entity.
     *
     * @Route("/{id}/update", name="atouts_update")
     * @Method("POST")
     * @Template("DiginUserBundle:Atouts:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Atouts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Atouts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AtoutsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('atouts_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Atouts entity.
     *
     * @Route("/{id}/delete", name="atouts_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DiginUserBundle:Atouts')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Atouts entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('atouts'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
