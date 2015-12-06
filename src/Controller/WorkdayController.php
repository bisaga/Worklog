<?php
namespace Bisaga\Controller;

use Bisaga\Application;
/**
 * @author igorb
 */
class WorkdayController {
    
    public function show(Application $app)
    {
        $name = "Workday"; 
        return $app->render('workday.html.twig', array('name'=>$name));
    }
}
