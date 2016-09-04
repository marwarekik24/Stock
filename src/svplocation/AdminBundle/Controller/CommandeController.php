<?php

namespace svplocation\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use svplocation\AdminBundle\Entity\Commande;
use svplocation\AdminBundle\Form\CommandeType;

/**
 * Commande controller.
 *
 */
class CommandeController extends Controller {

    /**
     * Lists all Commande entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('svplocationAdminBundle:Commande')->findAll();

        return $this->render('svplocationAdminBundle:Commande:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function indexAttenteAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->createQuery('SELECT m FROM svplocationAdminBundle:Commande m WHERE m.statut = :statut')
                ->setParameter('statut', "en attente")
                ->getResult();
        return $this->render('svplocationAdminBundle:Commande:index.html.twig', array(
                    'entities' => $entities,
        ));
    }
    
    
    public function indexconfirmeeAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->createQuery('SELECT m FROM svplocationAdminBundle:Commande m WHERE m.statut = :statut')
                ->setParameter('statut', "confirmé")
                ->getResult();
        return $this->render('svplocationAdminBundle:Commande:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Commande entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Commande();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('commande_show', array('id' => $entity->getIdCmd())));
        }

        return $this->render('svplocationAdminBundle:Commande:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Commande entity.
     *
     * @param Commande $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Commande $entity) {
        $form = $this->createForm(new CommandeType(), $entity, array(
            'action' => $this->generateUrl('commande_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Commande entity.
     *
     */
    public function newAction() {
        $entity = new Commande();
        $form = $this->createCreateForm($entity);

        return $this->render('svplocationAdminBundle:Commande:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Commande entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('svplocationAdminBundle:Commande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('svplocationAdminBundle:Commande:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Commande entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('svplocationAdminBundle:Commande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commande entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('svplocationAdminBundle:Commande:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Commande entity.
     *
     * @param Commande $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Commande $entity) {
        $form = $this->createForm(new CommandeType(), $entity, array(
            'action' => $this->generateUrl('commande_update', array('id' => $entity->getIdCmd())),
            'method' => 'PUT',
        ));


        //**Add idBenif to editForm
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u FROM svplocationUserBundle:User u WHERE NOT u.roles LIKE :role')
                ->setParameter('role', '%"ROLE_ADMIN"%');
        $users = $query->getResult();

        $form->add('idbeneficiaire', 'choice', array(
            'choices' => $users));
        //**
        $form->add('submit', 'submit', array('label' => 'Modifier la commande'));

        return $form;
    }

    /**
     * Edits an existing Commande entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('svplocationAdminBundle:Commande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);


        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('commande'));
        }

        return $this->render('svplocationAdminBundle:Commande:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Commande entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('svplocationAdminBundle:Commande')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Commande entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('commande'));
    }

    /**
     * Creates a form to delete a Commande entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('commande_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function deleteCmdAction($id) {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('svplocationAdminBundle:Commande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commande entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('commande'));
    }

}
