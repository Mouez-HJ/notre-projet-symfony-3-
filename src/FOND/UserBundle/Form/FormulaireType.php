<?php

namespace FOND\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FormulaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('question1', ChoiceType::class, array(
            'label' => 'Choice',
            'choices' => array(
                'Page Helper Process' => '1',
                'Programming Home Pages' => '2',
                'PHP: Hypertext Preprocessor'   => '3'),
                'choices_as_values' => true,'multiple'=>false,'expanded'=>true))->add('question2', ChoiceType::class, array(
                'choices' => array(
                    ' strlen'  => '1',
                    'strlength'=> '2',
                    'length'   => '3',
                    'substr'   => '4'),
                    'choices_as_values' => true,'multiple'=>false,'expanded'=>true))->add('question3', ChoiceType::class, array(
                    'choices' => array(
                        '$tableau[1]' => '1',
                        '$tableau[0]' => '2',
                        '$tableau{0}' => '3',
                        '$tableau.get(1)' => '3'),
                        'choices_as_values' => true,'multiple'=>false,'expanded'=>true))->add('question4', ChoiceType::class, array(
                        'choices' => array(
                            '$a = $b' => '1',
                            '$a == $b' => '2',
                            '$a != $b'  => '3',
                            'if($a,$b)' => '4'),
                            'choices_as_values' => true,'multiple'=>false,'expanded'=>true))->add('question5', ChoiceType::class, array(
                        'choices' => array(
                                'Il sert à vérifier que toutes les conditions sont réalisées.' => '1',
                                'Il sert à vérifier qu\'une, et une seule, des conditions est réalisée.' => '2',
                                'Il sert à vérifier qu\'une, au moins, des conditions est réalisée.'  => '3'),
                                'choices_as_values' => true,'multiple'=>false,'expanded'=>true))->add('question6', ChoiceType::class, array(
                        'choices' => array(
                            ' 0 ou 1' => '1',
                            'TRUE ou FALSE' => '2',
                            'Toutes sauf NULL'  => '3'),
                            'choices_as_values' => true,'multiple'=>false,'expanded'=>true))->add('question7', ChoiceType::class, array(
                        'choices' => array(
                            'Sera éxécutée 2 fois' => '1',
                            'Sera éxécutée 3 fois' => '2',
                            'Sera éxécutée 4 fois'  => '3'),
                            'choices_as_values' => true,'multiple'=>false,'expanded'=>true))->add('question8', ChoiceType::class, array(
                        'choices' => array(
                            'echo \'$a = quatre\'' => '1',
                            'echo \'$a = 2+2\'' => '2',
                            'echo "$a = quatre"'  => '3'),
                            'choices_as_values' => true,'multiple'=>false,'expanded'=>true))->add('question9', ChoiceType::class, array(
                        'choices' => array(
                            '3' => '1',
                            '8' => '2',
                            '12'  => '3'),
                            'choices_as_values' => true,'multiple'=>false,'expanded'=>true))->add('question10', ChoiceType::class, array(
                    'choices' => array(
                        'get' => '1',
                        'mailto' => '2',
                        'post'  => '3'),
                        'choices_as_values' => true,'multiple'=>false,'expanded'=>true));
 }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FOND\UserBundle\Entity\Formulaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fond_userbundle_formulaire';
    }


}
