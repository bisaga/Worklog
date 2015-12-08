<?php

namespace Bisaga\Domain;

use Bisaga\Application;
use Silex\ServiceProviderInterface;

class WorkdayService implements ServiceProviderInterface
{
    /* @var $cn Doctrine\DBAL\Connection */
    private $cn; 
    
    public function register(Application $app)
    {
        $cn = $app['db'];
    }

    public function boot(Application $app)
    {
        // Configure the application and *carefully* use services.
    }
    
    
    public function getWorkday($dateTime)
    {
        
    }
    
}