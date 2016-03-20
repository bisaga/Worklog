<?php
/**
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 *
 * User: igorb
 * Date: 25.2.2016
 * Time: 0:12
 */

namespace Bisaga\Infrastructure\Core;

use Symfony\Component\HttpFoundation\Request;


abstract class GridService extends ServiceBase
{
    /** @var  GridRequest $gridRequest */
    private $gridRequest;

    /**
     * @return GridRequest
     */
    public function getGridRequest()
    {
        return $this->gridRequest;
    }

    /**
     * @param Request $request
     * @return array
     */
    public function processRequest(Request $request)
    {
        $this->gridRequest = new GridRequest($request->get('request'));

        switch ($this->gridRequest->getCmd()) {

            case 'get':
                $rows = $this->processGet();
                $result['status'] = 'success';
                $result['total'] = count($rows);
                $result['records'] = $rows;
                break;

            default:
                $result = Array();
                $result['status']  = 'error';
                $result['message'] = 'Command "'.$this->gridRequest->getCmd().'" is not recognized.';
                $result['postData']= $request->get('request');
                break;
        }
        return $result;
    }

    private function processGet()
    {
        $cn = $this->getConnection();
        $cn->connect();

        // create SELECT statement
        $stmt = $this->createSelect();

        $rows = array();
        $pos = 0;

        while($stmt && $row = $stmt->fetch())
        {
            // create new artificial recid column for update key if not already exist (w2ui specifics)
            $firstColumn = array_slice($row, 0, 1, true);
            if( key($firstColumn) != 'recid' )
            {
                $pos++;
                $row['recid'] = $pos;
            }

            $rows[] = $row;
        }
        $rowCount = $stmt->rowCount();

        $cn->close();
        return $rows;
    }

    // Process get records
    /**
     * @return \Doctrine\DBAL\Driver\Statement|int
     */
    abstract function createSelect();

}