<?php

namespace svplocation\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('svplocationUserBundle:user:index.html.twig');
    }


    public function indexPersonnelAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u FROM svplocationUserBundle:User u WHERE u.roles LIKE :role')
                ->setParameter('role', '%"ROLE_PERSONNEL"%');
        $users = $query->getResult();

        return $this->render('svplocationUserBundle:user:indexPersonnel.html.twig', array('entities' => $users));
    }

    public function indexClientAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u FROM svplocationUserBundle:User u WHERE u.roles LIKE :role')
                ->setParameter('role', '%"ROLE_CLIENT"%');
        $users = $query->getResult();

        return $this->render('svplocationUserBundle:user:indexClient.html.twig', array('entities' => $users));
    }
}
