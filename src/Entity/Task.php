<?php
namespace Werick\Laminas\Model;
require __DIR__."/../../vendor/autoload.php";
use DateTime;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\DBAL\Types\Types;

#[Entity]
#[Table(name: 'tarefa')]
class Task
{
    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue]
    private ?int $id = null;
    #[Column(name:'nome')]
    private string $nome;
    #[Column(name: 'data_de_cadastro', type: Types::DATETIME)]
    private  DateTime $dataDeCadastro;
    #[Column(name: 'data_de_inicio', type: Types::DATETIME)]
    private  DateTime $dataDeInicio;
    #[Column(name:'status',type: Types::INTEGER)]
    private int $status;
    #[Column(name: 'data_prevista', type: Types::DATETIME)]
    private  DateTime $dataPrevista;
    #[Column(name: 'data_de_conclusao', type: Types::DATETIME)]
    private  DateTime $dataDeConclusao;
    #[Column(name:'detalhes')]
    private string $detalhes;

    public function __construct(string $nome, string $status, string $dataPrevista)
    {
        $this->nome = $nome;
        $this->dataDeCadastro = new DateTime('now');
        $this->status = $status;
        $this->dataPrevista = new DateTime($dataPrevista);
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
    public function getdetalhes()
    {
        return $this->detalhes;
    }
    public function setdetalhes(string $detalhes)
    {
        $this->detalhes = $detalhes;
    }
    
}
 