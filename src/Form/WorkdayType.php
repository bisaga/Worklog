<?php

/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */
namespace Bisaga\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
/**
 * Description of WorkdayForm
 *
 * @author igorb
 */
class WorkdayType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('starttime', TimeType::class, array('label'=>'Arrive at', 'required'=>false, 'input'=>'timestamp', 'widget'=>'single_text'))
                ->add('endtime', TimeType::class, array('label'=>'Depart at', 'required'=>false, 'input'=>'timestamp', 'widget'=>'single_text'))
                ->add('location',TextType::class, array('label'=>'Location', 'required'=>false))
                ->add('status',ChoiceType::class, array(
                    'label'=>'Status', 'required'=>false, 
                    'choices' => array(
                        'Open' => false,
                        'Closed' => true
                        ), 
                    'choices_as_values' => true))
                ->add('fromtime',TimeType::class, array('label'=>'From', 'required'=>false, 'input'=>'timestamp', 'widget'=>'single_text'))
                ->add('totime',TimeType::class, array('label'=>'To', 'required'=>false, 'input'=>'timestamp', 'widget'=>'single_text'))
                ->add('logtime',TextType::class, array('label'=>'Time spent', 'required'=>false))
                ->add('description',TextareaType::class, array('label'=>'Description'))
                ->add('taskcode',TextType::class, array('label'=>'Task code', 'required'=>false))
                ->add('save',SubmitType::class, array('label'=>'Save'));
    }
    
    public function getName()
    {
        return 'workday';
    }
    
}
