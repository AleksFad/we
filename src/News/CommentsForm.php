<?php


namespace App\News;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class CommentsForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add(
                'content',
                TextType::class,
                [
                    'constraints' => [new NotBlank()],
                    'attr' => ['class' => 'form-control']
                ]
            )
            ->add(
                'id',
                HiddenType::class,
                [
                    'attr' => ['class' => 'form-control']
                ]
            )
            ->add(
                'submit',
                SubmitType::class,
                [
                    'attr' => ['class' => 'form-control btn-primary pull-right'],
                    'label' => 'Submit comment'
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Comments'
        ]);
    }

    public function getName()
    {
        return 'comments_form';
    }
}