<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ItemType extends AbstractType
{
    public function getName()
    {
        return 'item';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(['data_class' => 'Acme\DemoBundle\Form\FormData\Item']);
    }
}