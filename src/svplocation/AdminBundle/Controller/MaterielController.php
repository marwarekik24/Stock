<?php

namespace svplocation\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use svplocation\AdminBundle\Entity\Materiel;
use svplocation\AdminBundle\Form\MaterielType;
use \svplocation\AdminBundle\Entity\LigneCommande;
use \svplocation\AdminBundle\Entity\Commande;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use svplocation\AdminBundle\Form\LocationType;

/**
 * Materiel controller.
 *
 * @Route("/materiel")
 */
class MaterielController extends Controller {

    /**
     * Lists all Materiel entities.
     *
     * @Route("/", name="materiel")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('svplocationAdminBundle:Materiel')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Materiel entity.
     *
     * @Route("/", name="materiel_create")
     * @Method("POST")
     * @Template("svplocationAdminBundle:Materiel:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Materiel();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('materiel'));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Materiel entity.
     *
     * @param Materiel $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Materiel $entity) {
        $form = $this->createForm(new MaterielType(), $entity, array(
            'action' => $this->generateUrl('materiel_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
     * Displays a form to create a new Materiel entity.
     *
     * @Route("/new", name="materiel_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {

        $materiel = new Materiel();
        $form = $this->get('form.factory')->create(new MaterielType(), $materiel);
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->get('doctrine')->getEntityManager();
                $em->persist($materiel);
                $em->flush();
                $this->get('session')->getFlashBag('notice', 'You have successfully added '
                        . $materiel->getRefPiece() . ' - ' .
                        $materiel->getCodeBarre() . ' - ' . $materiel->getValeur() .
                        ' to the database!');
                return $this->redirect($this->generateUrl('materiel'));
            }
        }

        return $this->render('svplocationAdminBundle:Materiel:new.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Materiel entity.
     *
     * @Route("/{id}/edit", name="materiel_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('svplocationAdminBundle:Materiel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Materiel entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Materiel entity.
     *
     * @param Materiel $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Materiel $entity) {
        $form = $this->createForm(new MaterielType(), $entity, array(
            'action' => $this->generateUrl('materiel_update', array('id' => $entity->getIdMateriel())),
            'method' => 'PUT',
        ));

        return $form;
    }

    /**
     * Edits an existing Materiel entity.
     *
     * @Route("/{id}", name="materiel_update")
     * @Method("PUT")
     * @Template("svplocationAdminBundle:Materiel:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('svplocationAdminBundle:Materiel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Materiel entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('materiel'));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
        );
    }

    /**
     * Deletes a Materiel entity.
     *
     * @Route("/{id}", name="materiel_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $Materiel = $em->find('svplocationAdminBundle:Materiel', $id);
        $em->remove($Materiel);
        $em->flush();

        return $this->redirect($this->generateUrl('materiel'));
    }

    //************ SELECTION CLIENT/PERSONNEL ************************
    public function locationMaterielStep0Action() {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u FROM svplocationUserBundle:User u WHERE NOT u.roles LIKE :role')
                ->setParameter('role', '%"ROLE_ADMIN"%');
        $users = $query->getResult();

        return $this->render('svplocationAdminBundle:Materiel:louer0.html.twig', array('clients' => $users));
    }

    //************ SELECTION ENTREPOT ************************
    public function locationMaterielStep1Action($idClient) {
        $em = $this->getDoctrine()->getManager();
        $entrepots = $em->getRepository('svplocationAdminBundle:Entrepot')->findAll();
        return $this->render('svplocationAdminBundle:Materiel:louer1.html.twig', array('entrepots' => $entrepots, 'idClient' => $idClient));
    }

    //************ FORMULAIRE D'AJOUT DES MATERIELS - 2 EME ETAPE ************************
    public function locationMaterielStep2Action(Request $request, $idClient, $idEntrep) {

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
            $defaultData = array('json' => $json);
            $form = $this->createFormBuilder($defaultData)
                    ->add('json', 'text')
                    ->add('projet')
                    ->add('typeCmd')
                    ->add('dateReservation', 'date', array('widget' => 'single_text'))
                    ->add('dateRetour', 'date', array('widget' => 'single_text'))
                    ->add('description', 'textarea')
                    ->add('statut', 'choice', array(
                        'choices' => array(
                            'en attente' => 'en attente',
                            'confirmé' => 'confirmé',
                            'bloquée' => 'bloqué',
                )))
                    ->getForm();
            return $this->render('svplocationAdminBundle:Materiel:louer3.html.twig', array('materiels' => $materiels, 'form' => $form->createView(), 'idEntrep' => $idEntrep, 'entrep' => $entrep, 'idClient' => $idClient));
        }


        return $this->render('svplocationAdminBundle:Materiel:louer2.html.twig', array('materiels' => $materiels, 'form' => $form->createView(), 'idEntrep' => $idEntrep, 'entrep' => $entrep, 'idClient' => $idClient));
    }

    //************ VALIDATION FINALE 3 EME ETAPE ************************
    public function locationMaterielStep3Action(Request $request, $idClient, $idEntrep) {

        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() == 'POST') {
            //Ajout commande
            $projet = $this->get('request')->request->get('form')['projet'];
            $typeCmd = $this->get('request')->request->get('form')['typeCmd'];
            $dateReservation = $this->get('request')->request->get('form')['dateReservation'];
            $dateRetour = $this->get('request')->request->get('form')['dateRetour'];
            $description = $this->get('request')->request->get('form')['description'];
            $statut = $this->get('request')->request->get('form')['statut'];

            $commande = new Commande($idClient, $projet, $typeCmd, new \Datetime($dateReservation), new \Datetime($dateRetour), $description, $statut);
            $em->persist($commande);
            $em->flush();
            //Json decode
            $json = $this->get('request')->request->get('form')['json'];
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizers = array(new GetSetMethodNormalizer());
            $serializer = new Serializer($normalizers, $encoders);
            $lignesCommandeArray = $serializer->decode($json, 'json');

            //Ajout ligne_commande ligne par ligne
            for ($j = 0; $j < count($lignesCommandeArray); $j++) {
                $lignesCommande = new LigneCommande($commande->getIdCmd(), $lignesCommandeArray[$j]['id materiel'], $lignesCommandeArray[$j]['quantité']);
                $em->persist($lignesCommande);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('commande'));
        }

        return $this->render('svplocationAdminBundle:Materiel:louer3.html.twig', array('form' => $form->createView(), 'idEntrep' => $idEntrep, 'idClient' => $idClient));
    }

}
