<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => [
                    'attr' => [
                        'class' => 'password-field'
                    ]
                ],
                'required' => true,
                'first_options'  => [
                    'label' => 'Tapez votre mot de passe'
                ],
                'second_options' => [
                    'label' => 'Repetez le mot de passe'
                ],
                'required' => false
            ])
            ->add('isActive')
            //->add('role')
            /*, EntityType::class, [
               // query choices from this entity
               'class' => 'App:User',
               // use the User.username property as the visible option string
               'choice_label' => 'role',
               ])*/
            // ->add('role', CheckboxType::class, [
            //     'label'    => 'Utilisateur',
            //     'required' => true,
            // ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
