<?php

namespace Digin\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PreparationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cv')
            ->add('lettre_motivation')
            ->add('aisance_entretien')
            ->add('frequence_consultation')
            ->add('frequence_candidature')
            ->add('contacts_pro')
            ->add('pole_emploi')
            ->add('frequence_pole_emploi')
            ->add('entretien')
            ->add('frequence_entretien')
            ->add('besoin_aide')
            ->add('user_id')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Digin\UserBundle\Entity\Preparation'
        ));
    }

    public function getName()
    {
        return 'digin_userbundle_preparationtype';
    }
}
