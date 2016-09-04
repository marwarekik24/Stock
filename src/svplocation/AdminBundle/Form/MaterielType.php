<?php

namespace svplocation\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 

class MaterielType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom')
        ->add('description','textarea')
        ->add('idCategorie', 'entity', array(
        'class' => 'svplocationAdminBundle:Categorie',
        'property' => 'refCat'))   
        ->add('refPiece')
        ->add('codeBarre')
        ->add('valeur')
        ->add('idEntrepot', 'entity', array(
        'class' => 'svplocationAdminBundle:Entrepot',
        'property' => 'adresse',))   
                ;
       
    }
    
   
      public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'svplocation\AdminBundle\Entity\Materiel'
        );
    }
 /**
     * @return string
     */
    
    public function getName()
    {
        return 'new';
    }
}
