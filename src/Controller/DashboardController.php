<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

namespace Bisaga\Controller;

use Bisaga\Application;
/**
 * @author igorb
 */
class DashboardController {
    
    public function show(Application $app)
    {
        $name = "Dashboard";

        // TWIG version
        //return $app->render('dashboard.html.twig', array('name'=>$name));

        // PHP ONLY VERSION
        return $app->render("dashboard.html.php", array('title'=>$name));
    }



}
