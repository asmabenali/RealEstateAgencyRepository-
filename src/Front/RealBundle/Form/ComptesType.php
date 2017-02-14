<?php

namespace Front\RealBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComptesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('pwd')
            ->add('mail')
            ->add('tel')
            ->add('agence')
            ->add('type')
            ->add('idOffre')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Front\RealBundle\Entity\Comptes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'front_realbundle_comptes';
    }
}
