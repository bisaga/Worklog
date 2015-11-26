<?php
namespace Bisaga;

use Silex;
use Silex\Provider\DoctrineServiceProvider;

/**
 * Description of Application
 *
 * @author igorb
 */
class Application extends Silex\Application 
{
    use Silex\Application\TwigTrait;
    
    public function __construct(array $values = array()) {
        parent::__construct($values);
    }
    
    public function initialize()
    {
        $this->registerServices();
        $this->createRoutes();
    }

    public function createRoutes() 
    {
        $this->get('/', 'Bisaga\Controller\MainController::index');
        //$this->get('/hello/{name}', 'Bisaga\Controller\HelloController::hello');
    }
    
    public function registerServices()
    {
        // Doctrine DBAL database access provider 
        $this->register(new DoctrineServiceProvider(), 
                    array(
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
                    )
                );

        $this->register(new Silex\Provider\TwigServiceProvider(), 
                    array (
                        'twig.path' => __DIR__.'\Views',
                    )
                );
        
    }
    
}
