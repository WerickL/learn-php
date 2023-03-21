<?php
namespace Werick\Laminas\DbCrud;
require_once __DIR__."/../../vendor/autoload.php";

use Werick\Laminas\Entity\Task;
use Werick\Laminas\DbCrud\EntityManagerInterface;
use Werick\Laminas\Helper\EntityManagerFactory;

class EntityManager implements EntityManagerInterface{
    private $entityFactory;
    public function __construct()
    {
        $this->entityFactory  = new EntityManagerFactory();
    }
    public function getAll($entity)
    {
        $entityManager = $this->entityFactory->getEntityManager();
        $repository = $entityManager->getRepository(get_class($entity));
        return $repository->findAll();
    }

    public function getById($entity, $id){
        $entityManager = $this->entityFactory->getEntityManager();
        $repository = $entityManager->getRepository(get_class($entity));
        return $repository->find($id);
    }
    public function getByField($entity, $field, $value){
        $entityManager = $this->entityFactory->getEntityManager();
        $repository = $entityManager->getRepository(get_class($entity));
        return $repository->findBy([
            $field=>$value
        ]);
    }
}