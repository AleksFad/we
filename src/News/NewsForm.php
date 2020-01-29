<?php

namespace App\News;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class NewsForm extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'title',
                TextType::class,
                [
                    'constraints' => [new NotBlank()],
                    'attr' => ['class' => 'form-control']
                ]
            )
            ->add(
                'description',
                TextType::class,
                [
                    'constraints' => [new NotBlank()],
                    'attr' => ['class' => 'form-control']
                ]
            )
            ->add(
                'content',
                TextareaType::class,
                [
                    'constraints' => [new NotBlank()],
                    'attr' => ['class' => 'form-control']
                ]
            )
            ->add('image', FileType::class, [
                'label' => 'Import image',
                'mapped' => false,
                'required' => false,
            ])
            //->add('categories', 'App\News\CategoryForm',['attr' => ['class' => 'form-control']])
            ->add(
                'submit',
                SubmitType::class,
                [
                    'attr' => ['class' => 'form-control btn-primary pull-right'],
                    'label' => 'Submit news'
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\News'
        ]);
    }

    public function getName()
    {
        return 'news_form';
    }
}