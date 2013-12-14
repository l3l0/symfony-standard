<?php

namespace Acme\DemoBundle\Controller;

use Acme\DemoBundle\Form\FormData\Item;
use Acme\DemoBundle\Form\FormData\Main;
use Acme\DemoBundle\Form\MainType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DemoController extends Controller
{
    /**
     * @Route("/item-form", name="_demo_hello")
     * @Template()
     */
    public function helloAction(Request $request)
    {
        $item1 = new Item('1');
        $item2 = new Item('2');
        $item3 = new Item('3');

        $main = new Main([$item1, $item2, $item3]);
        $form = $this->createForm(new MainType(), $main);
        $form->handleRequest($request);
        if ($form->isValid()) {
            die('Is valid');
        } else {
            var_dump($form->getErrorsAsString());
        }

        return ['form' => $form->createView()];
    }
}
