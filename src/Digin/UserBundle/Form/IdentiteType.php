<?php

namespace Digin\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IdentiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe')
            ->add('date_naissance')
            ->add('nationalite')
            ->add('adresse1')
            ->add('adresse2')
            ->add('ville')
            ->add('code_postal')
            ->add('email')
            ->add('tel')
            ->add('portable')
            ->add('user_id')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Digin\UserBundle\Entity\Identite'
        ));
    }

    public function getName()
    {
        return 'digin_userbundle_identitetype';
    }
}
