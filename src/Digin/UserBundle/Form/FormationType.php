<?php

namespace Digin\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('desir_formation')
            ->add('intitule_formation')
            ->add('desir_reorientation')
            ->add('secteur_reorientation')
            ->add('commentaire')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Digin\UserBundle\Entity\Formation'
        ));
    }

    public function getName()
    {
        return 'digin_userbundle_formationtype';
    }
}
