<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */
namespace Bisaga\Infrastructure\Core;

use Silex;
/**
 * Description of ApplicationBase
 *
 * @author igorb
 */
class ApplicationBase extends Silex\Application {
    
    public function __construct(array $values = array()) {
        parent::__construct($values);
    }

    public function setService($name, $service)
    {
        $this[$name] = $service;
    }
    
    public function getService($service_name)
    {
        return $this[$service_name];
    }
        
}


