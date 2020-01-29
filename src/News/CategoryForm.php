<?php


namespace App\News;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class CategoryForm extends AbstractType
{

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
                'submit',
                SubmitType::class,
                [
                    'attr' => ['class' => 'form-control btn-primary pull-right'],
                    'label' => 'Submit category'
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Category'
        ]);
    }

    public function getName()
    {
        return 'category_form';
    }
}