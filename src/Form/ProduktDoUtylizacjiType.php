<?php

namespace App\Form;

use App\Entity\ProduktDoUtylizacji;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduktDoUtylizacjiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nazwa')
            ->add('numerSeryjny')
            ->add('dataProdukcji')
            ->add('PlanowanaDataUtylizacji')
            ->add('CzyZostaloZutylizowane')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProduktDoUtylizacji::class,
        ]);
    }
}
