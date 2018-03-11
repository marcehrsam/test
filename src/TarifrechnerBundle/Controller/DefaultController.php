<?php

namespace TarifrechnerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="tarife")
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('@Tarifrechner/Default/tr.html.twig');
    }
}
