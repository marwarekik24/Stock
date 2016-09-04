<?php
namespace svplocation\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PersonnelController extends Controller
{
    public function deleteAction($id)
    {

        $em =$this->getDoctrine()->getManager(); 


        $query = $em->createQuery('SELECT u FROM svplocationUserBundle:User u WHERE u.id = :id_user')
                ->setParameter('id_user', $id );
        $user = $query->getSingleResult();

        $em->remove($user); 
        $em->flush(); 
       
           return $this->redirect($this->generateUrl('personnel'));
   
    }
}