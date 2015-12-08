<?php


/**
 * Table WorklogTable
 *
 * @author igorb
 */
class WorklogTable {
    const Table = "worklogtable";

    public function __construct() {
    }

    const Id = "id";
    /* @var $id int*/
    private $id;
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
    
    
    const WorkDate = "workdate";
    /* @var $workDate DateTime */
    private $workDate;
    /**
     * WorkDate
     * @return DateTime
     */
    public function getWorkDate()
    {
        return $this->workDate;
    }
    /**
     * WorkDate
     * @param DateTime $workDate
     */
    public function setWorkDate($workDate)
    {
        $this->workDate = $workDate;
    }
    
    
    const Location = "location";
    /* @var $location string */
    private $location;
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
    
    
    const Milage = "milage";
    /* @var $milage float */
    private $milage;
    /**
     * Milage
     * @return float
     */
    public function getMilage()
    {
        return $this->milage;
    }
    /**
     * Milage
     * @param float $milage
     */
    public function setMilage($milage)  
    {
        $this->milage = $milage;
    }
    
    const StartTime = "starttime";
    /* @var $startTime float */
    private $startTime;
    /**
     * Start time 
     * @return float
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    /**
     * Start time
     * @param float $startTime
     */
    public function setStartTime($startTime)  
    {
        $this->startTime = $startTime;
    }
    
    const EndTime = "endtime";
    /* @var $endTime float */
    private $endTime;
    /**
     * End time 
     * @return float
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    /**
     * End time
     * @param float $endTime
     */
    public function setEndTime($endTime)  
    {
        $this->endTime = $endTime;
    }

    const TotalTime = "totaltime";
    /* @var $totalTime float */
    private $totalTime;
    /**
     * Total time 
     * @return float
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }
    /**
     * Total time
     * @param float $totalTime
     */
    public function setTotalTime($totalTime)  
    {
        $this->totalTime = $totalTime;
    }
    
    
    const Status = "status";
    /* @var $status string*/
    private $status;
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


