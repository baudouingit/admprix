<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NominesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nominee')
            ->add('domaine')
            ->add('annee')
            ->add('elu')
            ->add('commentaire', 'ckeditor')
            ->add('longcomm')
            ->add('photo')
            ->add('sid1')
            ->add('nid1')
            ->add('sid2')
            ->add('nid2')
            ->add('sid3')
            ->add('nid3');
    }

    /*
     * $builder->add('subject', 'text', array(
    'label'  => 'Subject',
    'attr'   =>  array(
    'class'   => 'c4')
    */

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Nomines'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_nomines';
    }


}
