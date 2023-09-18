<?php

namespace App\Form;

use App\Entity\Campaign;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CampaignType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre de votre campagne',
                'attr' => [
                    'class' => 'validate',
                    'id' => 'title'
                ]
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'class' => 'materialize-textarea',
                    'id' => 'description',
                    'placeholder' => 'Décrivez à vos amis pourquoi vous faites une campagne'
                ]
            ])
            ->add('goal', NumberType::class, [
                'label' => 'Votre objectif en euros',
                'attr' => [
                    'class' => 'validate',
                    'id' => 'goal'
                ]
            ])
            ->add('name', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'class' => 'validate',
                    'id' => 'author'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Campaign::class,
        ]);
    }
}
