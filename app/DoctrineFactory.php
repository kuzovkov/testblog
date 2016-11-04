<?php
// bootstrap.php
require_once "../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Proxy\Autoloader;

$proxyDir = "app/proxy";
$proxyNamespace = "MyProxies";

Autoloader::register($proxyDir, $proxyNamespace);

/**
 * Class DoctrineFactory создание объекта Doctrine
 */
class DoctrineFactory{
    private $paths = array("entities");
    private $isDevMode = false;
    
    // the connection configuration
    private $dbParams = array(
        'driver'   => 'pdo_mysql',
        'user'     => 'root',
        'password' => 'rootroot',
        'dbname'   => 'test3',
    );
    
    public function getUser(){
        return $this->dbParams['user'];
    }
    
     public function getPassword(){
        return $this->dbParams['password'];
    }
    
     public function getDbname(){
        return $this->dbParams['dbname'];
    }
    
    public function getEntityManager(){
        $config = Setup::createAnnotationMetadataConfiguration($this->paths, $this->isDevMode);
        $config->setAutoGenerateProxyClasses(Doctrine\Common\Proxy\AbstractProxyFactory::AUTOGENERATE_FILE_NOT_EXISTS);
        $entityManager = EntityManager::create($this->dbParams, $config);
        return $entityManager;
    }
    
}