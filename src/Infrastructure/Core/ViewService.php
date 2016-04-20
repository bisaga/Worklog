<?php
/**
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 *
 * User: igorb
 * Date: 19.3.2016
 * Time: 14:10
 */

namespace Bisaga\Infrastructure\Core;


class ViewService
{

  private $pageVars = array();
  private $templateFile;
  private $viewPath;

  public function __construct($app)
  {
    $this->viewPath = $app['view_dir'];
    $this->set('app', $app);
  }

  public function set($var, $val)
  {
    $this->pageVars[$var] = $val;
  }

  public function render($templateFile, $vars = null)
  {
    if ($vars != null) {
      foreach ($vars as $key => $value) {
        $this->set($key, $value);
      }
    }
    $this->set('view', $this);

    $this->templateFile = $this->viewPath . '/' . $templateFile;
    extract($this->pageVars);

    ob_start();

    require($this->templateFile);

    $contents = ob_get_contents();
    ob_end_clean();
    return $contents;
  }

  public function import($fileName)
  {
    ob_start();
    include($this->viewPath . '/' . $fileName);
    $contents = ob_get_contents();
    ob_end_clean();
    echo $contents;
  }

}