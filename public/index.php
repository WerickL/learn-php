<?php
 //require_once "../vendor/autoload.php";
 require_once __DIR__."/../vendor/autoload.php";


use Werick\Laminas\Entity\Task;
use Werick\Laminas\DbCrud;
use Werick\Laminas\DbCrud\EntityManager;

$task = new Task("Iniciar a classe de tarefas", 1, (new DateTime("tomorrow"))->format("Y-m-d H:i:s"));
$entityManager = new EntityManager();
var_dump(($entityManager->getAll($task)));
?>   