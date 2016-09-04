<?php

namespace svplocation\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use svplocation\AdminBundle\Entity\Personnel;
use svplocation\AdminBundle\Form\PersonnelType;

/**
 * Personnel controller.
 *
 * @Route("/personnel")
 */
class PersonnelController extends Controller
{

    /**
     * Lists all Personnel entities.
     *
     * @Route("/", name="personnel")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('svplocationAdminBundle:Personnel')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Personnel entity.
     *
     * @Route("/", name="personnel_create")
     * @Method("POST")
     * @Template("svplocationAdminBundle:Personnel:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Personnel();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('personnel'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Personnel entity.
     *
     * @param Personnel $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Personnel $entity)
    {
        $form = $this->createForm(new PersonnelType(), $entity, array(
            'action' => $this->generateUrl('personnel_create'),
            'method' => 'POST',
        ));

        
        return $form;
    }

    /**
     * Displays a form to create a new Personnel entity.
     *
     * @Route("/new", name="personnel_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        
    $personnel= new Personnel();

    $formBuilder = $this->get('form.factory')->createBuilder('form', $personnel);

    $formBuilder
             ->add('nom','text')
             ->add('prenom','text')
             ->add('email','email')
             ->add('telephone','integer')
             ->add('fonction','text')
             ->add('matricule','text')
             
             ->add('Valider','submit')
    ;
    
    $form = $formBuilder->getForm();

    return $this->render('svplocationAdminBundle:Personnel:new.html.twig', array(
      'form' => $form->createView(),
    ));
    }

    /**
     * Displays a form to edit an existing Personnel entity.
     *
     * @Route("/{id}/edit", name="personnel_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('svplocationAdminBundle:Personnel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personnel entity.');
        }

        $editForm = $this->createEditForm($entity);
        

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Personnel entity.
    *
    * @param Personnel $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Personnel $entity)
    {
        $form = $this->createForm(new PersonnelType(), $entity, array(
            'action' => $this->generateUrl('personnel_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        return $form;
    }
    /**
     * Edits an existing Personnel entity.
     *
     * @Route("/{id}", name="personnel_update")
     * @Method("PUT")
     * @Template("svplocationAdminBundle:Personnel:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('svplocationAdminBundle:Personnel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personnel entity.');
        }

     
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('personnel', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
    
         public function deleteAction($id)
    {
        $em =$this->getDoctrine()->getManager(); 
        $Personnel =$em->find('svplocationAdminBundle:Personnel',$id); 
        $em->remove($Personnel); 
        $em->flush(); 
       
        return $this->redirect($this->generateUrl('personnel'));
    }
}
