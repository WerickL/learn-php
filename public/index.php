<?php
 //require_once "../vendor/autoload.php";
 require_once __DIR__."/../autoload.php";
 
    use Project\Model\Task;
 //$client = new \Laminas\Http\Client();
    $task = new Task("Iniciar a classe de tarefas", 1, (new DateTime("tomorrow"))->format("Y-m-d H:i:s"));
    echo $task->__toString();
?>   