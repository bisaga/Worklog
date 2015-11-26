<?php
namespace Bisaga\Controller;

use Bisaga\Application;
/**
 * @author igorb
 */
class MainController {
    
    public function index(Application $app)
    {
        $name = "Igor Babič"; 
        return $app->render('main.html.twig', array('name'=>$name));
    }
}
