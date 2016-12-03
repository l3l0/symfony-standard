<?php

namespace AppBundle\Controller;

use AppBundle\Form\MyType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $myTypeForm = $this->createForm(MyType::class);

        $myTypeForm->handleRequest($request);
        if ($myTypeForm->isValid()) {
            dump($myTypeForm->getData());

            die;
        }

        return $this->render('default/index.html.twig', array('form' => $myTypeForm->createView()));
    }
}
