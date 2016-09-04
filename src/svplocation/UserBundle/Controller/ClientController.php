<?php
namespace svplocation\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    public function deleteAction($id)
    {

        $em =$this->getDoctrine()->getManager(); 


        $query = $em->createQuery('SELECT u FROM svplocationUserBundle:User u WHERE u.id = :id_user')
                ->setParameter('id_user', $id );
        $client = $query->getSingleResult();

        $em->remove($client); 
        $em->flush(); 
       
           return $this->redirect($this->generateUrl('clients'));
   
    }
}