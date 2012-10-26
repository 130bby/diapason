<?php

namespace Digin\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Digin\UserBundle\Entity\Experience;
use Digin\UserBundle\Form\ExperienceType;

/**
 * Experience controller.
 *
 * @Route("/experience")
 */
class ExperienceController extends Controller
{
    /**
     * Lists all Experience entities.
     *
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DiginUserBundle:Experience')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Experience entity.
     *
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Experience')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experience entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Experience entity.
     *
     * @Template()
     */
    public function newAction()
    {
        $entity = new Experience();
        $form   = $this->createForm(new ExperienceType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Experience entity.
     *
     * @Route("/create", name="experience_create")
     * @Method("POST")
     * @Template("DiginUserBundle:Experience:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Experience();
        $entity->setUserId($this->container->get('security.context')->getToken()->getUser());
        $form = $this->createForm(new ExperienceType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('experience_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Experience entity.
     *
     * @Route("/edit", name="experience_edit")
     * @Template()
     */
    public function editAction()
    {
        $id = $user = $this->container->get('security.context')->getToken()->getUser()->getExperience()->getId();

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Experience')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experience entity.');
        }

        $editForm = $this->createForm(new ExperienceType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Experience entity.
     *
     * @Route("/{id}/update", name="experience_update")
     * @Method("POST")
     * @Template("DiginUserBundle:Experience:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DiginUserBundle:Experience')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experience entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ExperienceType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('experience_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Experience entity.
     *
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DiginUserBundle:Experience')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Experience entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('experience'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
