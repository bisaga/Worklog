<?php
/**
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 *
 * User: igorb
 * Date: 29.2.2016
 * Time: 21:21
 */

namespace Bisaga\Infrastructure\Core;


class GridRequest
{
  /**@var string $cmd */
  private $cmd;

  /**@var array $selected */
  private $selected;

  /** @var  integer $limit */
  private $limit;

  /**@var integer $offset */
  private $offset;

  /** @var  array $search */
  private $search;

  public function __construct($json = '')
  {
    if ($json != '') {
      $this->set(json_decode($json));
    }
  }


  /**
   * @return string
   */
  public function getCmd()
  {
    return $this->cmd;
  }

  /**
   * @param string $cmd
   */
  public function setCmd($cmd)
  {
    $this->cmd = $cmd;
  }

  /**
   * @return array
   */
  public function getSelected()
  {
    return $this->selected;
  }

  /**
   * @param array $selected
   */
  public function setSelected($selected)
  {
    $this->selected = $selected;
  }

  /**
   * @return int
   */
  public function getLimit()
  {
    return $this->limit;
  }

  /**
   * @param int $limit
   */
  public function setLimit($limit)
  {
    $this->limit = $limit;
  }

  /**
   * @return int
   */
  public function getOffset()
  {
    return $this->offset;
  }

  /**
   * @param int $offset
   */
  public function setOffset($offset)
  {
    $this->offset = $offset;
  }

  /**
   * @return array
   */
  public function getSearch()
  {
    return $this->search;
  }

  /**
   * @param array $search
   */
  public function setSearch($search)
  {
    $this->search = $search;
  }


  public function set($data)
  {
    foreach ($data AS $key => $value) {
      if (is_array($value)) {
        switch ($key) {
          case 'selected':
            $this->setSelected($value);
            break;

          case 'search':
            break;
        }
      } else {
        $this->{$key} = $value;
      }
    }
  }

}