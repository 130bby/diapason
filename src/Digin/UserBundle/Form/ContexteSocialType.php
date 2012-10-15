<?php

namespace Digin\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContexteSocialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('statut_matrimonial')
            ->add('enfant')
            ->add('nombre_enfant')
            ->add('age_enfant')
            ->add('hebergement')
            ->add('statut_professionnel')
            ->add('date_debut_professionnel')
            ->add('pb_sante')
            ->add('etat_physique')
            ->add('etat_psychologique')
            ->add('suivi_psy')
            ->add('etat_financier')
            ->add('endettement')
            ->add('avancement_demarche')
            ->add('commentaire')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Digin\UserBundle\Entity\ContexteSocial'
        ));
    }

    public function getName()
    {
        return 'digin_userbundle_contextesocialtype';
    }
}
