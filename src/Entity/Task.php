<?php
namespace Werick\Laminas\Entity;
require __DIR__."/../../vendor/autoload.php";
use DateTime;
use DateTimeZone;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Werick\Laminas\Helper\EntityManagerFactory;
/**
 * @Entity
 */
class Task
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="IDENTITY")
     * 
     */
    private ?int $id = null;
    /**
     * @Column(type="string")
     */
    private string $nome;
    /**
     * @Column(type="datetime")
     */
    private  DateTime $dataDeCadastro;
    /**
     * @Column(type="datetime", nullable=true)
     */
    private  DateTime $dataDeInicio;
    /**
     * @Column(type="integer")
     */
    private int $status;
    /**
     * @Column(type="datetime")
     */
    private  DateTime $dataPrevista;
    /**
     * @Column(type="datetime", nullable=true)
     */
    private  DateTime $dataDeConclusao;
    /**
     * @Column(type="string", nullable=true)
     */
    private string $detalhes;

    public function __construct(string $nome, string $status, string $dataPrevista)
    {
        $this->nome = $nome;
        $this->dataDeCadastro = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
        $this->status = $status;
        $this->dataPrevista = new DateTime($dataPrevista, new DateTimeZone('America/Sao_Paulo'));
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function getDataDeCadastro()
    {
        return $this->dataDeCadastro;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus(string $status)
    {
        $this->status = $status;
    }
    public function getDataPrevista()
    {
        return $this->dataPrevista;
    }
    public function setDataPrevista(string $dataPrevista)
    {
        $this->dataPrevista= new DateTime(strtotime($dataPrevista, "Y-m-d H-i-s"));
    }
    public function getdataDeConclusao()
    {
        return $this->dataDeConclusao;
    }
    public function  setDataDeConclusão(string $data)
    {
        $this->dataDeConclusao = new DateTime(strtotime($data, "Y-m-d H-i-s"));
    }
    public function getdataDeInicio()
    {
        return $this->dataDeInicio;
    }
    public function  setDataDeInicio(string $data)
    {
        $this->dataDeInicio = new DateTime(strtotime($data, "Y-m-d H-i-s"));
    }
    public function getdetalhes()
    {
        return $this->detalhes;
    }
    public function setdetalhes(string $detalhes)
    {
        $this->detalhes = $detalhes;
    }
}
 