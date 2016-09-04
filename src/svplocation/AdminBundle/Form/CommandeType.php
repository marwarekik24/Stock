<?php

namespace svplocation\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommandeType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        
        $builder
                ->add('projet')
                ->add('typeCmd')
                ->add('dateReservation', 'date', array('widget' => 'single_text'))
                ->add('dateRetour', 'date', array('widget' => 'single_text'))
                ->add('description')
                ->add('statut', 'choice', array(
                    'choices' => array(
                        'en attente' => 'en attente',
                        'confirmé' => 'confirmé',
                        'bloqué' => 'bloqué',
            )))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'svplocation\AdminBundle\Entity\Commande'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'svplocation_adminbundle_commande';
    }

}
