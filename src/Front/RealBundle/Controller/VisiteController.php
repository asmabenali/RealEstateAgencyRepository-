<?php

namespace Front\RealBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Front\RealBundle\Entity\Visite;
use Front\RealBundle\Form\VisiteType;

/**
 * Visite controller.
 *
 */
class VisiteController extends Controller
{

    /**
     * Lists all Visite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontRealBundle:Visite')->findAll();

        return $this->render('FrontRealBundle:Visite:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Visite entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Visite();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('visite_show', array('id' => $entity->getId())));
        }

        return $this->render('FrontRealBundle:Visite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Visite entity.
     *
     * @param Visite $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Visite $entity)
    {
        $form = $this->createForm(new VisiteType(), $entity, array(
            'action' => $this->generateUrl('visite_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Visite entity.
     *
     */
    public function newAction()
    {
        $entity = new Visite();
        $form   = $this->createCreateForm($entity);

        return $this->render('FrontRealBundle:Visite:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Visite entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontRealBundle:Visite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Visite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontRealBundle:Visite:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Visite entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontRealBundle:Visite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Visite entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontRealBundle:Visite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Visite entity.
    *
    * @param Visite $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Visite $entity)
    {
        $form = $this->createForm(new VisiteType(), $entity, array(
            'action' => $this->generateUrl('visite_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Visite entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontRealBundle:Visite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Visite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('visite_edit', array('id' => $id)));
        }

        return $this->render('FrontRealBundle:Visite:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Visite entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FrontRealBundle:Visite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Visite entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('visite'));
    }

    /**
     * Creates a form to delete a Visite entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('visite_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
