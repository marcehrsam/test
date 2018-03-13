<?php

/*
    Der Typ kann in jedem beliebigen Ordner liegen. Die Konvention ist allerdings Bundle->Form->Type
 *  */

namespace TarifrechnerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TarifrechnerBundle extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'choices' => array(
                'bla' => 'standard',
                'blub' => 'erweitert'
            ),
            'cloices_as_value'=>true,
        ));
    }
    
    public function getParent() {
        return ChoiceType::class;
    }
}

?>

