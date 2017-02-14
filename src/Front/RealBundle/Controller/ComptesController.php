<?php

namespace Front\RealBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Front\RealBundle\Entity\Comptes;
use Front\RealBundle\Form\ComptesType;

/**
 * Comptes controller.
 *
 */
class ComptesController extends Controller
{

    /**
     * Lists all Comptes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FrontRealBundle:Comptes')->findAll();

        return $this->render('FrontRealBundle:Comptes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Comptes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Comptes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('comptes_show', array('id' => $entity->getId())));
        }

        return $this->render('FrontRealBundle:Comptes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Comptes entity.
     *
     * @param Comptes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Comptes $entity)
    {
        $form = $this->createForm(new ComptesType(), $entity, array(
            'action' => $this->generateUrl('comptes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Comptes entity.
     *
     */
    public function newAction()
    {
        $entity = new Comptes();
        $form   = $this->createCreateForm($entity);

        return $this->render('FrontRealBundle:Comptes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Comptes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontRealBundle:Comptes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comptes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontRealBundle:Comptes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Comptes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontRealBundle:Comptes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comptes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FrontRealBundle:Comptes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Comptes entity.
    *
    * @param Comptes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Comptes $entity)
    {
        $form = $this->createForm(new ComptesType(), $entity, array(
            'action' => $this->generateUrl('comptes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Comptes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FrontRealBundle:Comptes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comptes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('comptes_edit', array('id' => $id)));
        }

        return $this->render('FrontRealBundle:Comptes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Comptes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FrontRealBundle:Comptes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Comptes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('comptes'));
    }

    /**
     * Creates a form to delete a Comptes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comptes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
