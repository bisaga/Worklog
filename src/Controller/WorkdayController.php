<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

namespace Bisaga\Controller;

use Bisaga\Application;
use Bisaga\Service\WorkdayGridService;
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
            'selectedDate' => $this->getSelectedDate()->format('d.m.Y')
        ];
        
        return $app->render('workday.html.php', $data);
        
    }

    /**
     * @return \DateTime
     */
    private function getSelectedDate()
    {
        return new \DateTime('now', new \DateTimeZone('Europe/Ljubljana'));
    }

    public function form(Request $request, Application $app)
    {
        $data = "{status:'success', record: {'selectedDate': '".
            $this->getSelectedDate()->format('d.m.Y')
            ."', startTime:'0:00', endTime:'0:00', recid:'1'}}";
        return $data;
    }

    public function grid(Request $request, Application $app)
    {
        /** @var WorkdayGridService $gridService */
        $gridService = $app['workdayGrid'];
        $gridService->setSelectedDate($this->getSelectedDate());
        $result = $gridService->processRequest($request);

        $retStr = json_encode($result);
        return json_encode($result);
    }



}
