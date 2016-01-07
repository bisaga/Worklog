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
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
/**
 * Description of WorkdayForm
 *
 * @author igorb
 */
class WorkdayType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('workday', DateType::class)
                ->add('location',TextType::class)
                ->add('status', TextType::class)
                ->add('save', SubmitType::class);
    }
    
    public function getName()
    {
        return 'workday';
    }
    
}
