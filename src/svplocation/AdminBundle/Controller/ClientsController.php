<?php

namespace svplocation\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use svplocation\AdminBundle\Entity\Clients;
use svplocation\AdminBundle\Form\ClientsType;

/**
 * Clients controller.
 *
 * @Route("/clients")
 */
class ClientsController extends Controller
{

    /**
     * Lists all Clients entities.
     *
     * @Route("/", name="clients")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('svplocationAdminBundle:Clients')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Clients entity.
     *
     * @Route("/", name="clients_create")
     * @Method("POST")
     * @Template("svplocationAdminBundle:Clients:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Clients();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clients'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Clients entity.
     *
     * @param Clients $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Clients $entity)
    {
        $form = $this->createForm(new ClientsType(), $entity, array(
            'action' => $this->generateUrl('clients_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
     * Displays a form to create a new Clients entity.
     *
     * @Route("/new", name="clients_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        
    $client = new Clients();
    $formBuilder = $this->get('form.factory')->createBuilder('form', $client);

    $formBuilder
      ->add('nom','text')
      ->add('prenom','text')
      ->add('email','email')
      ->add('matriculefiscale','text')
      ->add('nomsociete', 'text')
      ->add('nomsociete', 'text')
      ->add('nomprojet', 'text')
      ->add('telephone', 'integer')
      ->add('Valider','submit')
    ;
    
    $form = $formBuilder->getForm();

    
    return $this->render('svplocationAdminBundle:Clients:new.html.twig', array(
      'form' => $form->createView(),
    ));
    }
    /**
     * Displays a form to edit an existing Clients entity.
     *
     * @Route("/{id}/edit", name="clients_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('svplocationAdminBundle:Clients')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clients entity.');
        }

        $editForm = $this->createEditForm($entity);
       

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            
        );
    }

    /**
    * Creates a form to edit a Clients entity.
    *
    * @param Clients $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Clients $entity)
    {
        $form = $this->createForm(new ClientsType(), $entity, array(
            'action' => $this->generateUrl('clients_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        return $form;
    }
    /**
     * Edits an existing Clients entity.
     *
     * @Route("/{id}", name="clients_update")
     * @Method("PUT")
     * @Template("svplocationAdminBundle:Clients:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('svplocationAdminBundle:Clients')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clients entity.');
        }

       
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clients', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            
        );
    }
    /**
     * Deletes a Clients entity.
     *
     * @Route("/{id}", name="clients_delete")
     * @Method("DELETE")
     */
    public function deleteAction( $id)
    {
        $em =$this->getDoctrine()->getManager(); 
        $Client =$em->find('svplocationAdminBundle:Clients',$id); 
        $em->remove($Client); 
        $em->flush(); 
       
           return $this->redirect($this->generateUrl('clients'));
   
}
}
