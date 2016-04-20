<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */
namespace Bisaga\Controller;

use Bisaga\Application;
use Symfony\Component\HttpFoundation\Request;

class LocaleController
{
  public function getFile(Application $app, Request $request, $file_path_name)
  {
    $fn = './w2ui/locale/' . $file_path_name;
    $locale_content = file_get_contents($fn);

    return $locale_content;
  }
}