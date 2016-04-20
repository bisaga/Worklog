<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */
namespace Bisaga\Service;

use Bisaga\Infrastructure\Core\ServiceBase;
use Bisaga\Model\WorklogTable;

/**
 * Description of WorkdayService
 *
 * @author igorb
 */
class WorkdayService extends ServiceBase
{

  public function save(WorklogTable $table)
  {
    $cn = $this->getConnection();

    $test = $table->getId();
    $cn->beginTransaction();

    $stmt = $cn->createQueryBuilder();
    $stmt->insert(WorklogTable::Table);
    $cn->commit();
  }
}
