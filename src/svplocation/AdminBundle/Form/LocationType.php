<?php

namespace svplocation\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LocationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('json')
            ->add('projet')
            ->add('typeCmd')
            ->add('dateReservation')
            ->add('dateRetour')
            ->add('description')
            ->add('statut')
        ;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'svplocation_adminbundle_materiel';
    }
}
