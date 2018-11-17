<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Nombre:',

                'attr' => [
                    'placeholder' => 'Introduzca nombre',
                    'class' => 'form-group form-control',
                ]
            ])

            ->add('email', EmailType::class, [
                'label' => 'Email:',

                'attr' => [
                    'placeholder' => 'Introduzca email',
                    'class' => 'form-group form-control',
                ]
            ])

            ->add('comments', TextareaType::class, [
                'label' => 'Consulta:',

                'attr' => [
                    'placeholder' => 'Introduzca el motivo de contacto',
                    'class' => 'form-group form-control',
                ]
            ])

            // ->add('termsAccepted', CheckboxType::class, [
            //     'mapped' => false,
            //     'label' => 'Acepto la política de privacidad',

            //     'attr' => [
            //         'class' => 'form-group',
            //     ]
            // ])

            ->add('save', SubmitType::class, [
                'label' => 'Contactar',

                'attr' => [
                    'class' => 'form-group btn btn-primary btn-block'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
