<?php

namespace POO\Cliente;

use POO\Interfaces\GrauInterface,
    POO\Interfaces\CobrancaInterface;

class PessoaJuridica extends Cliente implements GrauInterface,  CobrancaInterface{
    protected $cnpj;
    protected $grau;
    protected $cobranca;


    public function __construct($nome, $cnpj) {
        $this->cnpj = $cnpj;
        parent::__construct($nome);
    }
    
    public function getImportancia() {
        return $this->grau;
    }

    public function setImportancia($grau) {
        $this->grau = $grau;
        return $this;
    }
    
    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getEnderecoCobranca() {
        return $this->cobranca;
    }

    public function setEnderecoCobranca($endereco) {
        $this->cobranca = $endereco;
        return $this;
    }

}
