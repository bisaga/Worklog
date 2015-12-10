<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

require_once __DIR__.'/../vendor/autoload.php'; 


// Do bootstrapping within a new local scope to avoid polluting the global
return call_user_func(
    function () {
        
        // Use UTF-8 for all multi-byte functions
        mb_internal_encoding('UTF-8');
        mb_http_output('UTF-8');
        
        $app = new Bisaga\Application(); 
        
        // debug mode enabled 
        $app['debug'] = true;
        
        // debug mode disabled 
        //$app['debug'] = false;
        
        $app->initialize();
 
        return $app;
    }
);



