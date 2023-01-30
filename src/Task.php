<?php


class Task
{
    private string $text;
    private  DateTime $dataDeCadastro;
    private string $situacao;
    private string $dataPrevistaEntrega;
    private string $dataDeConclusao;

    public function __construct(string $text, string $situacao, string $dataPrevistaEntrega)
    {
        $this->text = $text;
        $this->dataDeCadastro = new DateTime('now');
        $this->situacao = $situacao;
        $this->dataPrevistaEntrega = $dataPrevistaEntrega;
    }

    public function getText()
    {
        return $this->text;
    }
    public function setText(string $text)
    {
        $this->text = $text;
    }
    public function getDataDeCadastro()
    {
        return $this->dataDeCadastro;
    }
    public function getSituacao()
    {
        return $this->situacao;
    }
    public function setSituacao(string $situacao)
    {
        $this->situacao = $situacao;
    }
    public function getDataPrevistaEntrega()
    {
        return $this->dataPrevistaEntrega;
    }
    public function setDataPrevistaEntrega(string $dataPrevista)
    {
        $this->dataPrevistaEntrega = $dataPrevista;
    }
    public function getdataDeConclusao()
    {
        return $this->dataDeConclusao;
    }
    public function  setDataDeConclusão(string $data)
    {
        $this->dataDeConclusao = $data;
    }
    public function __toString()
    {
        return $this->text . " : ". ($this->dataDeCadastro)->format("Y-m-d H:i:s") ." : ". $this->situacao . " : ". $this->dataPrevistaEntrega;
    }
}
