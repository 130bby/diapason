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
            ->add('tel')
            ->add('portable')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Digin\UserBundle\Entity\Identite',
			'cascade_validation' => true
        ));
    }

    public function getName()
    {
        return 'identite';
    }
}
