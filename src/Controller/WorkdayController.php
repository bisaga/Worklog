<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

namespace Bisaga\Controller;

use Bisaga\Application;
use Bisaga\Model\WorklogTable;
use Bisaga\Form\WorkdayType;
use Symfony\Component\HttpFoundation\Request;
/**
 * @author igorb
 */
class WorkdayController {
    
    public function show(Request $request, Application $app)
    {
        /* @var $formType WorkdayType */    
        $formType = $app['form.factory']->create(new WorkdayType());
        if($request->isMethod('POST')) 
        {
            
        }
        $selectedDate = date("l, j/F/Y");
        $data = array(
            'form' => $formType->createView(),
            'selectedDate' => $selectedDate,
            'title' => 'Workday',
        );
        
        return $app->render('workday.html.twig', $data);
        
    }
}
