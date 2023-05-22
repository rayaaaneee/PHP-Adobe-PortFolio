<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserAsCollaboratorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'Name',
                TextType::class,
                [
                    'required' => true,
                    'attr' => [
                        'placeholder' => 'Name',
                        'class' => 'form-control',
                    ]
                ]
            )
            ->add(
                'Surname',
                TextType::class,
                [
                    'required' => true,
                    'attr' => [
                        'placeholder' => 'Surname',
                        'class' => 'form-control',
                    ]
                ]
            )
            ->add(
                'Submit',
                SubmitType::class,
                [
                    'label' => 'Add',
                    'attr' => [
                        'class' => 'btn btn-primary',
                    ]
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
