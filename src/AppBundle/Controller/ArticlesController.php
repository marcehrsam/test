<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Bla;

class ArticlesController extends Controller
{
    /**
    * @Route("/page1", name="page1")
    * @return Response
    */
   public function page1Action()
   {
       return $this->render('@App/Articles/page1.html.twig',
           array(
               // ...
           )
       );
    }
    
    /**
     * @Route("/page2", name="page2")
     * @return Response
     */
    public function page2Action()
    {
        
        
        
        return $this->render('@App/Articles/page2.html.twig',
            array(
                // ...
            )
        );
    }
}
