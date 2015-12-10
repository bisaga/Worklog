<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

namespace Bisaga;

use Silex\Provider\DoctrineServiceProvider;

/**
 * Description of Application
 *
 * @author igorb
 */
class Application extends Infrastructure\Core\ApplicationBase {
    use \Silex\Application\TwigTrait;
    
    public function __construct(array $values = array()) {
        parent::__construct($values);
    }
    
    public function initialize() {
        $this->registerServices();
        $this->createRoutes();
    }

    private function createRoutes() {
        $this->get('/', 'Bisaga\Controller\DashboardController::show');
        $this->get('/workday', 'Bisaga\Controller\WorkdayController::show');
        $this->get('/notimplemented', 'Bisaga\Controller\NotImplementedController::show');
    }
    
    private function registerServices() {
        // Doctrine DBAL database access provider 
        $this->register(new DoctrineServiceProvider(), array(
                    'db.options' => array(
                        'driver'    =>  'pdo_mysql',
                        'host'      =>  'localhost',
                        'port'      =>  '3306',
                        'dbname'    =>  'dbworklog',
                        'charset'   =>  'utf8mb4',
                        'user'      =>  'dbuser',
                        'password'  =>  'hp304no403',
                        'options'   =>  '{20: 0, 17: 0}'
                                        # [20] PDO::ATTR_EMULATE_PREPARES = false 
                                        # [17] PDO::ATTR_STRINGIFY_FETCHES = false
                    )
                ));

        $this->register(new \Silex\Provider\TwigServiceProvider(), array (
                        'twig.path' => __DIR__.'\Views',
                ));

        // custom Workday service 
        $this->setService(
                'workday', 
                $this->share( function($app) {
                    return new Service\WorkdayService($app['db']);
                }));
    }

}
