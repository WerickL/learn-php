<?php
use Werick\Laminas\Helper\EntityManagerFactory;
require "../vendor/autoload.php";

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$connection = $entityManager->getConnection();
print_r(PDO::getAvailableDrivers());
print_r(\Doctrine\DBAL\Types\Type::getTypesMap());
//var_dump($connection);