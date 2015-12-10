<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

namespace Bisaga\Controller;

use Bisaga\Application;
use Bisaga\Model\WorklogTable;
/**
 * @author igorb
 */
class WorkdayController {
    
    public function show(Application $app)
    {
        $name = "Workday"; 
        $table = new WorklogTable();
        $workdate = new \DateTime();
        $table->setWorkDate($workdate);
        
        /* @var $workday \Bisaga\Service\WorkdayService */
        $workday = $app->getService('workday');
        $workday->save($table);
        
        return $app->render('workday.html.twig', array('name'=>$name));
    }
}
