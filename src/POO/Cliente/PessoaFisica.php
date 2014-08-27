<?php

namespace POO\Cliente;

use POO\Interfaces\GrauInterface;

class PessoaFisica extends Cliente implements GrauInterface{
    protected $cpf;
    protected $sexo;
    protected $grau;


    public function __construct($nome, $cpf) {
        $this->cpf = $cpf;
        parent::__construct($nome);
    }
    
    public function getCpf() {
        return $this->cpf;
    }

    public function getSexo() {
        return $this->sexo;
    }
    
    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
        return $this;
    }

    public function getImportancia() {
        return $this->grau;
    }

    public function setImportancia($grau) {
        $this->grau = $grau;
        return $this;
    }

}
