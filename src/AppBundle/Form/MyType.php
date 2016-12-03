<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;

class MyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'my_date',
                DateTimeType::class,
                array(
                    'widget' => 'single_text',
                    'attr' => array(
                        'class' => 'date-picker',
                        'size' => 10,
                    ),
                    'format' => 'dd-MM-yyyy',
                    'required' => false,
                    'input' => 'datetime',
                    'constraints' => [
                        new GreaterThanOrEqual([
                            'value' => new \DateTime('01-01-2000'),
                            'message' => 'Invalid date value',
                        ]),
                        new LessThanOrEqual([
                            'value' => new \DateTime('31-12-9999'),
                            'message' => 'Invalid date value',
                        ]),
                    ],
                )
            )
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
    }
}
