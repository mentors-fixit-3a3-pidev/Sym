<?php

namespace PrestationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class PrestationsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomPrestation')->add('idSousCategorie')->add('descriptionPrestation')->add('datePrestation' , DateType::class, ['widget' => 'single_text',
        ])->add('etatPrestation',ChoiceType::class, ['choices'  => ['Non traitée' => 0,],])->add('prix')->add('idPrestataire');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PrestationsBundle\Entity\Prestations'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'prestationsbundle_prestations';
    }


}
