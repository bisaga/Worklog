<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */
namespace Bisaga\Model;

use DateTime;

/**
 * Table WorklogTable
 *
 * @author igorb
 */
class WorklogTable {
    const Table = "worklogtable";

    public function __construct() {
    }

    /* @var int $id */
    private $id;
    const Id = "id";

    /* @var DateTime $workdate */
    private $workdate;
    const WorkDate = "workdate";

    /* @var string $location */
    private $location;
    const Location = "location";

    /* @var float $milage */
    private $mileage;
    const Mileage = "mileage";

    /* @var float $starttime */
    private $starttime;
    const StartTime = "starttime";

    /* @var float $endtime */
    private $endtime;
    const EndTime = "endtime";

    /* @var float $totaltime */
    private $totaltime;
    const TotalTime = "totaltime";

    /* @var string $status */
    private $status;
    const Status = "status";


    /**
     * Id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Id
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    
    /**
     * WorkDate
     * @return DateTime
     */
    public function getWorkdate()
    {
        return $this->workdate;
    }
    /**
     * WorkDate
     * @param DateTime $workdate
     */
    public function setWorkdate($workdate)
    {
        $this->workdate = $workdate;
    }
    
    
    /**
     * Location
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set location
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    
    
    /**
     * Milage
     * @return float
     */
    public function getMileage()
    {
        return $this->mileage;
    }
    /**
     * Mileage
     * @param float $mileage
     */
    public function setMileage($mileage)
    {
        $this->mileage = $mileage;
    }
    
    /**
     * Start time 
     * @return float
     */
    public function getStarttime()
    {
        return $this->starttime;
    }
    /**
     * Start time
     * @param float $starttime
     */
    public function setStarttime($starttime)  
    {
        $this->starttime = $starttime;
    }
    
    /**
     * End time 
     * @return float
     */
    public function getEndtime()
    {
        return $this->endtime;
    }
    /**
     * End time
     * @param float $endtime
     */
    public function setEndtime($endtime)  
    {
        $this->endtime = $endtime;
    }

    /**
     * Total time 
     * @return float
     */
    public function getTotaltime()
    {
        return $this->totaltime;
    }
    /**
     * Total time
     * @param float $totaltime
     */
    public function setTotaltime($totaltime)
    {
        $this->totaltime = $totaltime;
    }
    
    
    /**
     * Status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Status
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
}


