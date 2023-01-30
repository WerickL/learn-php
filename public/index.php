<?php
 require_once "../vendor/autoload.php";
 require_once "../src/Task.php";
 //$client = new \Laminas\Http\Client();
    $task = new Task("Iniciar a classe de tarefas", "Em andamento", "Amanhã");
    echo $task->__toString();
?>