<?php

namespace Acme\DemoBundle\Form\FormData;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

class Main
{
    /**
     * @Assert\Count(max="2")
     */
    private $items;

    public function __construct(array $items = [])
    {
        $this->items = new ArrayCollection($items);
    }

    public function addItem(Item $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }
} 