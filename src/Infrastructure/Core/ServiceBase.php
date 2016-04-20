<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */
namespace Bisaga\Infrastructure\Core;
/**
 * Description of ServiceBase
 *
 * @author igorb
 */
class ServiceBase
{
  /** @var \Doctrine\DBAL\Connection $db */
  private $db;

  /**
   * @param \Doctrine\DBAL\Connection $db
   */
  public function __construct($db)
  {
    $this->db = $db;
  }

  /**
   * @return \Doctrine\DBAL\Connection
   */
  protected function getConnection()
  {
    return $this->db;
  }

}
