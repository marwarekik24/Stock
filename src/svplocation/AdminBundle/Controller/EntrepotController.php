<?php

namespace svplocation\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use svplocation\AdminBundle\Entity\Entrepot;
use svplocation\AdminBundle\Form\EntrepotType;

/**
 * Entrepot controller.
 *
 * @Route("/entrepot")
 */
class EntrepotController extends Controller
{

    /**
     * Lists all Entrepot entities.
     *
     * @Route("/", name="entrepot")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('svplocationAdminBundle:Entrepot')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Entrepot entity.
     *
     * @Route("/", name="entrepot_create")
     * @Method("POST")
     * @Template("svplocationAdminBundle:Entrepot:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Entrepot();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entrepot'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Entrepot entity.
     *
     * @param Entrepot $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Entrepot $entity)
    {
        $form = $this->createForm(new EntrepotType(), $entity, array(
            'action' => $this->generateUrl('entrepot_create'),
            'method' => 'POST',
        ));
        
        return $form;
    }

    /**
     * Displays a form to create a new Entrepot entity.
     *
     * @Route("/new", name="entrepot_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
       $entrepot= new Entrepot();

   
    $formBuilder = $this->get('form.factory')->createBuilder('form', $entrepot);

    $formBuilder
      ->add('adresse','text')
     
      ->add('Valider','submit')
    ;
    
    $form = $formBuilder->getForm();

    
    return $this->render('svplocationAdminBunle:Entrepot:new.html.twig', array(
      'form' => $form->createView(),
    ));
    }


    /**
     * Displays a form to edit an existing Entrepot entity.
     *
     * @Route("/{id}/edit", name="entrepot_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('svplocationAdminBundle:Entrepot')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entrepot entity.');
        }

        $editForm = $this->createEditForm($entity);
        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            
        );
    }

    /**
    * Creates a form to edit a Entrepot entity.
    *
    * @param Entrepot $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Entrepot $entity)
    {
        $form = $this->createForm(new EntrepotType(), $entity, array(
            'action' => $this->generateUrl('entrepot_update', array('id' => $entity->getIdEntrepot())),
            'method' => 'PUT',
        ));

        return $form;
    }
    /**
     * Edits an existing Entrepot entity.
     *
     * @Route("/{id}", name="entrepot_update")
     * @Method("PUT")
     * @Template("svplocationAdminBundle:Entrepot:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('svplocationAdminBundle:Entrepot')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entrepot entity.');
        }

       
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('entrepot', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
           
        );
    }
    /**
     * Deletes a Entrepot entity.
     *
     * @Route("/{id}", name="entrepot_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $em =$this->getDoctrine()->getManager(); 
        $Entrepot =$em->find('svplocationAdminBundle:Entrepot',$id); 
        $em->remove($Entrepot); 
        $em->flush(); 
       
        return $this->redirect($this->generateUrl('entrepot'));
    }

}
