<?php

namespace svplocation\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT count(u.id) FROM svplocationUserBundle:User u WHERE NOT u.roles LIKE :role')
                ->setParameter('role', '%"ROLE_ADMIN"%');
        $total_membres = $query->getSingleScalarResult();

        $query = $em->createQuery('SELECT count(m.idMateriel) FROM svplocationAdminBundle:Materiel m');
        $total_materiels = $query->getSingleScalarResult();
        
        $query = $em->createQuery('SELECT count(m.idEntrepot) FROM svplocationAdminBundle:Entrepot m');
        $total_entrepots = $query->getSingleScalarResult();
        
        $query = $em->createQuery('SELECT count(m.idCmd) FROM svplocationAdminBundle:Commande m');
        $total_locations = $query->getSingleScalarResult();

        return $this->render('svplocationAdminBundle:admin:index.html.twig', array('total_membres' => $total_membres,'total_materiels' => $total_materiels,'total_entrepots' => $total_entrepots,'total_locations' => $total_locations));
    }

}
