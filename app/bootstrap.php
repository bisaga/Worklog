<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

require_once __DIR__.'/../vendor/autoload.php'; 


// Do bootstrapping within a new local scope to avoid polluting the global
return call_user_func(
    function () {

        define("ROOT", __DIR__ . "/../");
        
        // Use UTF-8 for all multi-byte functions
        mb_internal_encoding('UTF-8');
        mb_http_output('UTF-8');

        date_default_timezone_set("Europe/Ljubljana");

        $app = new Bisaga\Application();

        // show errors
        ini_set('display_errors', 'On');

        // debug mode enabled 
        $app['debug'] = true;
        
        // twig cache folder 
        $app['twig.options.cache'] = __DIR__.'/cache/twig';
 
        $app->initialize();
 
        return $app;
    }
);



