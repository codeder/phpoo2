<?php

class Fisica implements iCliente {

    private $id;
    private $tipo;
    private $nome;
    private $cpf;
    private $sexo;
    private $endereco = array();

    function __construct($id, $tipo, $nome, $cpf, $sexo) {
        $this->id = $id;
        $this->tipo = "Fisica";
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
    }

    public function getId() {
        return $this->id;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getClassificacao() {
        return $this->class;
    }

    public function setClassificacao($class) {
        $this->class = $class;
    }

    public function setEndCobranca($endereco) {
        $this->endereco[] = $endereco;
    }

    public function getEndCobranca() {
        $endereco = "";
        foreach ($this->endereco as $key => $endereco) {            
            $endereco = $endereco->getRua()." - ".$endereco->getCidade()." / ".$endereco->getEstado();            
            return $endereco;
        }
    }

}
