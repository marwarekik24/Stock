<?php

namespace svplocation\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MaterielController extends Controller {

    public function locationMaterielStep1Action() {
        $em = $this->getDoctrine()->getManager();
        $entrepots = $em->getRepository('svplocationAdminBundle:Entrepot')->findAll();
        return $this->render('svplocationClientBundle:Materiel:louer1.html.twig', array('entrepots' => $entrepots));
    }

    /* public function locationMaterielStep2Action(Request $request, $idEntrep) {
      $em = $this->getDoctrine()->getManager();
      $location = new Location();

      $form = $this->createForm(new LocationType, $location);


      $entrep = $em->createQuery('SELECT e FROM svplocationAdminBundle:Entrepot e WHERE e.idEntrepot = :idEntrep')
      ->setParameter('idEntrep', $idEntrep)
      ->getOneOrNullResult();

      var_dump("AA");
      if ($form->handleRequest($request)->isValid()) {

      //Analyse json entry for Step3 forms

      var_dump($request->request->get('json'));
      var_dump("bb");


      $encoders = array(new XmlEncoder(), new JsonEncoder());
      $normalizers = array(new GetSetMethodNormalizer());

      $serializer = new Serializer($normalizers, $encoders);
      $content = $this->get('request')->request->get('json');
      $json = $serializer->decode($json, 'json');
      var_dump($json);
      return $this->redirect($this->generateUrl('my_app_cmsfony_menuList'));
      // return $this->render('svplocationClientBundle:Materiel:louer2.html.twig', array('json' => $json,'idEntrep' => $idEntrep, 'entrep' => $entrep));
      }

      //Load Step2 forms
      $materiels = $em->createQuery('SELECT m FROM svplocationAdminBundle:Materiel m WHERE m.idEntrepot = :idEntrep')
      ->setParameter('idEntrep', $idEntrep)
      ->getResult();

      //return $this->redirect($this->generateUrl('demande_location_materiel_2', array('materiels' => $materiels, 'idEntrep' => $idEntrep, 'entrep' => $entrep)));

      return $this->render('svplocationClientBundle:Materiel:louer2.html.twig', array('materiels' => $materiels, 'form' => $form->createView(), 'idEntrep' => $idEntrep, 'entrep' => $entrep));
      } */

    public function locationMaterielStep2Action(Request $request, $idEntrep) {



        $em = $this->getDoctrine()->getManager();
        $entrep = $em->createQuery('SELECT e FROM svplocationAdminBundle:Entrepot e WHERE e.idEntrepot = :idEntrep')
                ->setParameter('idEntrep', $idEntrep)
                ->getOneOrNullResult();

        $materiels = $em->createQuery('SELECT m FROM svplocationAdminBundle:Materiel m WHERE m.idEntrepot = :idEntrep')
                ->setParameter('idEntrep', $idEntrep)
                ->getResult();

        $defaultData = array('json' => 'en cours..');
        $form = $this->createFormBuilder($defaultData)
                ->add('json', 'text')
                ->getForm();
        if ($request->getMethod() == 'POST') {
            //$form->bindRequest($request);
            $json = $this->get('request')->request->get('form')['json'];
            var_dump($json);

            return $this->render('svplocationClientBundle:Materiel:louer3.html.twig', array('materiels' => $materiels, 'json' => $json, 'idEntrep' => $idEntrep, 'entrep' => $entrep));
        }


        return $this->render('svplocationClientBundle:Materiel:louer2.html.twig', array('materiels' => $materiels, 'form' => $form->createView(), 'idEntrep' => $idEntrep, 'entrep' => $entrep));
    }
    
    //TOCOMPLETE
    /*  public function locationMaterielStep3Action($idEntrep) {
      $em = $this->getDoctrine()->getManager();
      $entrep = $em->createQuery('SELECT e FROM svplocationAdminBundle:Entrepot e WHERE e.idEntrepot = :idEntrep')
      ->setParameter('idEntrep', $idEntrep)
      ->getOneOrNullResult();

      $materiels = $em->createQuery('SELECT m FROM svplocationAdminBundle:Materiel m WHERE m.idEntrepot = :idEntrep')
      ->setParameter('idEntrep', $idEntrep)
      ->getResult();


      $encoders = array(new XmlEncoder(), new JsonEncoder());
      $normalizers = array(new GetSetMethodNormalizer());
      $serializer = new Serializer($normalizers, $encoders);
      $LocationArray = $serializer->decode($json, 'json');

      for ($j = 0; $j < count($pagesMenuArray); $j++) {
      if ($pagesMenuArray[$j]['id'] != 0) {
      $relationMenuPage = new RelationMenuPage($menu->getId(), $pagesMenuArray[$j]['id']);
      $em->persist($relationMenuPage);
      $em->flush();
      }
      }
      return $this->render('svplocationClientBundle:Materiel:louer3.html.twig', array('json' => $json, 'idEntrep' => $idEntrep, 'entrep' => $entrep));
      } */
}
