<?php

namespace App\Form;

use App\Entity\Adress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Quel nom souhaitez-vous donner à votre adresse ?',
                'attr' => [
                    'placeholder' => 'ex : mon domicile'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Votre prénom',
                'attr' => [
                    'placeholder' => 'ex : John'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'placeholder' => 'ex : Doe'
                ]
            ])
            ->add('company', TextType::class, [
                'label' => 'Votre société',
                'required' => false,
                'attr' => [
                    'placeholder' => '(facultatif) ex : Apside'
                ]
            ])
            ->add('address', TextType::class, [
                'label' => 'Votre adresse',
                'attr' => [
                    'placeholder' => 'ex : 8, rue des Lilas'
                ]
            ])
            ->add('postal', TextType::class, [
                'label' => 'Votre code postal',
                'attr' => [
                    'placeholder' => 'ex : 75500'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Votre ville',
                'attr' => [
                    'placeholder' => 'ex : Paris'
                ]
            ])
            ->add('country', CountryType::class, [
                'label' => 'Votre pays',
                'attr' => [
                    'placeholder' => 'ex : France'
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'Votre téléphone',
                'attr' => [
                    'placeholder' => 'ex : 0606060606'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Valider mon adresse',
                'attr' => [
                    'class' => 'btn-block btn-info'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Adress::class,
        ]);
    }
}
