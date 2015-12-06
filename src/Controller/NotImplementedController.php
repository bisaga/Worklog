<?php
namespace Bisaga\Controller;

use Bisaga\Application;

class NotImplementedController
{
    
    public function show(Application $app)
    {
        $name = "Not implemented yet."; 
        return $app->render('notimplemented.html.twig', array('name'=>$name));
    }
}
