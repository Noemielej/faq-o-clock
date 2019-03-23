<?php

namespace App\Form;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('author',TextType::class, [
                 'label' => 'Votre nom',
                 ]) /*,EntityType::class, [
                // query choices from this entity
                'class' => 'App:User',
                // use the User.username property as the visible option string
                'choice_label' => 'username',
                'required' => false
            ])*/
            ->add('title', TextType::class, [
                'label' => 'Titre de la question',
                'attr' => [
                    'placeholder' => 'Titre de la question'
                ]
            ])
            ->add('body', TextareaType::class, [
                'label' => 'Votre question',
            ])
            ->add('created_at')
            //->add('user')
            ->add('tags')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}
