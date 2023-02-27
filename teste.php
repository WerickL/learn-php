<?php
use Werick\Laminas\Helper\EntityManagerFactory;
require "vendor/autoload.php";

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$connection = $entityManager->getConnection();
var_dump($connection);