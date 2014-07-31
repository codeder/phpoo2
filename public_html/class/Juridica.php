<?php

class Juridica implements iCliente {

    private $id;
    private $tipo;
    private $razaoSocial;
    private $nomeFantasia;
    private $cnpj;
    private $endereco = array();

    function __construct($id, $tipo, $razaoSocial, $nomeFantasia, $cnpj) {
        $this->id = $id;
        $this->tipo = "Juridica";
        $this->razaoSocial = $razaoSocial;
        $this->nomeFantasia = $nomeFantasia;
        $this->cnpj = $cnpj;
    }

    public function getId() {
        return $this->id;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function setNomeFantasia($nomeFantasia) {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
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
