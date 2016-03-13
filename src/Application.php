<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

namespace Bisaga;

use Silex;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Bisaga\Service\WorkdayService;
use Bisaga\Service\WorkdayGridService;

/**
 * Description of Application
 *
 * @author igorb
 */
class Application extends Silex\Application {
    use \Silex\Application\TwigTrait;
    
    public function __construct(array $values = array()) {
        parent::__construct($values);
    }
    
    public function initialize() {
        // Timezone.
        date_default_timezone_set('Europe/Ljubljana');        
        
        $this->registerServices();
        $this->createRoutes();
    }

    private function createRoutes() {
        $this->get('/', 'Bisaga\Controller\DashboardController::show');
        $this->get('/workday', 'Bisaga\Controller\WorkdayController::show')->bind('workday');
        $this->post('/workday_grid', 'Bisaga\Controller\WorkdayController::grid');
        $this->post('/workday_form', 'Bisaga\Controller\WorkdayController::form');
        $this->get('/notimplemented', 'Bisaga\Controller\NotImplementedController::show')->bind('notimplemented');
        $this->get('/person', 'Bisaga\Controller\PersonController::show');
        $this->get('/personData', 'Bisaga\Controller\PersonController::getData');
        $this->get('/locale/{file_path_name}', 'Bisaga\Controller\LocaleController::getFile');
    }
    
    private function registerServices() {

        // URL generator service
        $this->register(new Silex\Provider\UrlGeneratorServiceProvider());

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

        $this->register(new TwigServiceProvider(), array (
                        'twig.options' => array(
                            'cache' => isset($this['twig.options.cache']) ? $this['twig.options.cache'] : false,
                            'strict_variables' => true,
                        ),
                        'twig.path' => __DIR__.'/View',
                ));

        $this->register(new TranslationServiceProvider());
        
        // custom Workday service 
        $this['workday'] = $this->share( function($app) {
                    return new WorkdayService($app['db']);
                });

        // custom Workday grid service
        $this['workdayGrid'] = $this->share( function($app) {
            return new WorkdayGridService($app['db']);
        });

    }

}
