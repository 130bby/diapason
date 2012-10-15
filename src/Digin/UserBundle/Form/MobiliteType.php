<?php

namespace Digin\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MobiliteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('permis')
            ->add('details_permis')
            ->add('pb_permis')
            ->add('vehicule')
            ->add('deux_roues')
            ->add('voyage')
            ->add('destination_voyage')
            ->add('duree_voyage')
            ->add('metropole')
            ->add('but_voyage_metropole')
            ->add('duree_voyage_metropole')
            ->add('desir_mobilite')
            ->add('motivation_mobilite')
            ->add('user_id')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Digin\UserBundle\Entity\Mobilite'
        ));
    }

    public function getName()
    {
        return 'digin_userbundle_mobilitetype';
    }
}
