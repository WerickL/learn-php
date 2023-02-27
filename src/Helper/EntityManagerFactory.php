<?php
namespace Werick\Laminas\Helper;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
require_once "vendor/autoload.php";

class EntityManagerFactory{
    public function getEntityManager(): EntityManagerInterface{
    // Create a simple "default" Doctrine ORM configuration for Attributes
    $config = ORMSetup::createAnnotationMetadataConfiguration(
        array(__DIR__."/src"),
        true,
    );

    // configuring the database connection
    $connection = DriverManager::getConnection([
        'dbname' => 'kanban',
        'user' => 'root',
        'password' => 'SENHA_MYSQL',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    ], $config);

    // obtaining the entity manager
    return new EntityManager($connection, $config);
    }
};