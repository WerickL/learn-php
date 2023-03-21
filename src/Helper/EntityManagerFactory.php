<?php
namespace Werick\Laminas\Helper;
require_once __DIR__."/../../vendor/autoload.php";
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Dotenv\Dotenv;



class EntityManagerFactory{
    public function getEntityManager(): EntityManagerInterface{
    // Create a simple "default" Doctrine ORM configuration for Attributes
    $root_dir = __DIR__."/../../";
    $config = ORMSetup::createAnnotationMetadataConfiguration(
        array($root_dir."/src"),
        true,
    );

    // configuring the database connection
    
    $dotenv = Dotenv::createUnsafeImmutable($root_dir);
    $dotenv->load();
    $dbParams =[
        'dbname' => getenv("DB_NAME"),
        'user' => getenv("DB_USER"),
        'port' => 3306,
        'password' => getenv("MY_SQL_PASS"),
        'host' => getenv("DB_HOST"),
        'driver' => 'pdo_mysql',
    ];
    $connection =  DriverManager::getConnection($dbParams, $config);
    $entityManager = new EntityManager($connection, $config);
    return $entityManager;
    }
};