<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

namespace Bisaga\Controller;

use Bisaga\Application;
use Symfony\Component\HttpFoundation\Request;
/**
 * @author igorb
 */
class WorkdayController {
    
    public function show(Request $request, Application $app)
    {
        if($request->isMethod('POST'))
        {
            
        }
        $data = [
            'title' => 'Workday',
        ];
        
        return $app->render('workday.html.twig', $data);
        
    }
}
