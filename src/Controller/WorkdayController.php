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
        $calendar = null;
        $form = $app['form.factory']->create(new WorkdayType(), $calendar);
        if($request->isMethod('POST')) 
        {
        
        }
        
        $data = array(
            'form' => $form->createView(),
            'title' => 'Calendar day',
        );
        
        return $app->render('workday.html.twig', $data);
        
    }
}
