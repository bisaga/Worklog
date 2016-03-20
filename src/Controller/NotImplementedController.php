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
        $name = "This page is not implemented. Yet.";
        return $app->render('notimplemented.html.php', array('name'=>$name));
    }
}
