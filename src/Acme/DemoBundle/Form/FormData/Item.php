<?php

namespace Acme\DemoBundle\Form\FormData;

class Item
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
} 