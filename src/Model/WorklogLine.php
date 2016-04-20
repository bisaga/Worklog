<?php

/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */
namespace Bisaga\Model;

/**
 * Description of WorklogLine
 *
 * @author igorb
 */
class WorklogLine
{
  const Table = 'worklogline';

  public function __construct()
  {
  }

  /** @var integer */
  private $id;
  const Id = 'id';

  /** @var integer */
  private $worklogid;
  const WorklogId = 'worklogid';

  /**@var string */
  private $fromtime;
  const FromTime = 'fromtime';

  /**@var string */
  private $totime;
  const ToTime = 'totime';

  /**@var string */
  private $logtime;
  const LogTime = 'logtime';

  /**@var string */
  private $description;
  const Description = 'description';

  /**@var string */
  private $taskcode;
  const TaskCode = 'taskcode';

  /* @var string $location */
  private $location;
  const Location = 'location';

  /* @var float $milage */
  private $mileage;
  const Mileage = 'mileage';

  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @return int
   */
  public function getWorklogid()
  {
    return $this->worklogid;
  }

  /**
   * @param int $worklogid
   */
  public function setWorklogid($worklogid)
  {
    $this->worklogid = $worklogid;
  }

  /**
   * @return string
   */
  public function getFromtime()
  {
    return $this->fromtime;
  }

  /**
   * @param string $fromtime
   */
  public function setFromtime($fromtime)
  {
    $this->fromtime = $fromtime;
  }

  /**
   * @return string
   */
  public function getTotime()
  {
    return $this->totime;
  }

  /**
   * @param string $totime
   */
  public function setTotime($totime)
  {
    $this->totime = $totime;
  }

  /**
   * @return string
   */
  public function getLogtime()
  {
    return $this->logtime;
  }

  /**
   * @param string $logtime
   */
  public function setLogtime($logtime)
  {
    $this->logtime = $logtime;
  }

  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }

  /**
   * @return string
   */
  public function getTaskcode()
  {
    return $this->taskcode;
  }

  /**
   * @param string $taskcode
   */
  public function setTaskcode($taskcode)
  {
    $this->taskcode = $taskcode;
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

}
