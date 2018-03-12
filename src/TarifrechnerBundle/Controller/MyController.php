<?php

namespace TarifrechnerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MyController extends Controller
{
    /**
     * @Route("/page3", name="p3")
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('@Tarifrechner/My/index.html.twig');
    }

}
