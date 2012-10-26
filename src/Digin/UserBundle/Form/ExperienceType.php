<?php

namespace Digin\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('annees_entreprise')
            ->add('annees_stage')
            ->add('secteur')
            ->add('specialisation')
            ->add('specialisation_details')
            ->add('taille_entreprise')
            ->add('competences')
            ->add('difficultes')
            ->add('description')
            ->add('souhaits')
            ->add('description2')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Digin\UserBundle\Entity\Experience'
        ));
    }

    public function getName()
    {
        return 'digin_userbundle_experiencetype';
    }
}
