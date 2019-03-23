<?php

namespace App\Form;

use App\Entity\Answer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AnswerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('author',TextType::class, [
                'label' => 'Votre nom',
                ])
            ->add('question')
            ->add('title', TextType::class, [
                'label' => 'Titre de la réponse',
                'attr' => [
                    'placeholder' => 'Titre de la réponse'
                    ]
            ])
            ->add('body', TextareaType::class, [
                'label' => 'Votre réponse',
            ])
            //->add('created_at')
            /*->add('user', EntityType::class, [
                'class' => 'App:User',
                'choice_label' => 'id',
            ])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Answer::class,
        ]);
    }
}
