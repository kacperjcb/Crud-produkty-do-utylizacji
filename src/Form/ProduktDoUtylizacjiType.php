<?php

namespace App\Form;

use App\Entity\ProduktDoUtylizacji;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class ProduktDoUtylizacjiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nazwa')
            ->add('numerSeryjny')
            ->add('dataProdukcji',DateType::class,[
                'years'=>range(date('2001'), date('Y')+5),
            ])
            ->add('PlanowanaDataUtylizacji',DateTimeType::Class,[
                'years'=>range(date('2005'), date('Y')+5),
            ])
            ->add('CzyZostaloZutylizowane',)
        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProduktDoUtylizacji::class,
        ]);
    }
}
