<?php
namespace Werick\Laminas\DbCrud;
require_once __DIR__."/../../vendor/autoload.php";

interface EntityManagerInterface{
    //estrutura base da manager a implementaçao dessa interface tem de implementar o crud, tratar erros 
    public function getAll($entity);
    public function getById($entity, $id);
    public function getByField($entity, $field, $value);
    //public function upadate($entity, $field, $value);
}