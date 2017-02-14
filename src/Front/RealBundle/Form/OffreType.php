<?php

namespace Front\RealBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nature')
            ->add('typeimmob')
            ->add('prix')
            ->add('superficie')
            ->add('nbrpiece')
            ->add('datepublication')
            ->add('etage')
            ->add('surfaceCouverte')
            ->add('nbrSalleDb')
            ->add('gazdeville')
            ->add('jardin')
            ->add('chauffage')
            ->add('meuble')
            ->add('climatisation')
            ->add('note')
            ->add('description')
            ->add('url')
            ->add('idUser')
            ->add('ville')
            ->add('idCompte')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Front\RealBundle\Entity\Offre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'front_realbundle_offre';
    }
}
