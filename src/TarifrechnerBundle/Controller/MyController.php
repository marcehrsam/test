<?php

namespace TarifrechnerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class MyController extends Controller
{
    /**
     * @Route("/anzeige", name="anzeige")
     * @return Response
     */
    public function anzeigeAction()
    {
        return $this->render('@Tarifrechner/My/anzeige.html.twig');
    }
    
    /**
     * @Route("/page3", name="p3")
     * @return Response
     */
    public function newFormAction(Request $request){
        
        //Formular bauen
        $form = $this->createFormBuilder()
                ->add('tarifvertrag', ChoiceType::class, array(
                    'choices' => array(
                        'TV-L 2012' => '1',
                        'TV-L 2019' => '2',
                    )
                ))
                ->add('bezeichnung', TextType::class)
                ->add('save', SubmitType::class, array('label' => 'Speichern'))
                ->getForm();
        
        //Eventhandling (Submit)
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            return $this->redirectToRoute('anzeige');
        }
        
        //createView immer nach handleRequest!
        return $this->render('@Tarifrechner/My/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
