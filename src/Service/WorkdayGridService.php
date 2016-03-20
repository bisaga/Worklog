<?php
/**
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 *
 * User: igorb
 * Date: 29.2.2016
 * Time: 0:37
 */

namespace Bisaga\Service;

use Bisaga\Infrastructure\Core\GridService;
use Bisaga\Model\WorklogLine;
use Bisaga\Model\WorklogTable;
use PDO;

class WorkdayGridService extends GridService
{
    /** @var  \DateTime  */
    private $selectedDate;

    /**
     * @return \DateTime
     */
    public function getSelectedDate()
    {
        return $this->selectedDate;
    }

    /**
     * @param \DateTime $selectedDate
     */
    public function setSelectedDate($selectedDate)
    {
        $this->selectedDate = $selectedDate;
    }


    /**
     * @return \Doctrine\DBAL\Driver\Statement|int
     */
    public function createSelect()
    {
        /** @var int $worklogid */
        $worklogid = 0;

        if($this->getGridRequest()->selectedDate == '')
        {
            $newWorkday = new \DateTime('now', new \DateTimeZone('Europe/Ljubljana'));
        }
        else
        {
            $newWorkday = new \DateTime($this->getGridRequest()->selectedDate, new \DateTimeZone('Europe/Ljubljana'));
        }

        $this->setSelectedDate($newWorkday);

        $rq = $this->getGridRequest();
        $cn = $this->getConnection();

        $stmtWorkday = $cn->createQueryBuilder()
            ->select(WorklogTable::Id)
            ->from(WorklogTable::Table)
            ->where(WorklogTable::WorkDate.'= :selectedDate')
            ->setParameter('selectedDate', $this->getSelectedDate()->format('Y-m-d'))
            ->execute();

        /**@var WorklogTable $dayRow*/
        $stmtWorkday->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, WorklogTable::class);
        $dayRow = $stmtWorkday->fetch();
        if($dayRow)
        {
            $worklogid = $dayRow->getId();
        }

        $stmt = $cn->createQueryBuilder()
            ->select(WorklogLine::Id, WorklogLine::WorklogId,
                WorklogLine::FromTime, WorklogLine::ToTime, WorklogLine::LogTime,
                WorklogLine::Description, WorklogLine::TaskCode)
            ->from(WorklogLine::Table)
            ->where(WorklogLine::WorklogId.'= :id')
            ->setParameter('id', $worklogid)
            ->execute();

        return $stmt;
    }
}