<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

namespace Bisaga\Controller;

use Bisaga\Application;
use Symfony\Component\HttpFoundation\Request;

class NotImplementedController
{
    
    public function show(Application $app, Request $request)
    {
        $name = "This page is not implemented yet."; 
        return $app->render('notimplemented.html.twig', array('name'=>$name));
    }
}
