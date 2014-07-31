<?php

class Foto {
    
    private $foto = array();
    
    function __construct($foto) {
        $this->foto = $foto;
    }
    
    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }



}
