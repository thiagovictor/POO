<?php

class Cliente {
    protected $id;
    protected $nome;
    protected $cpf;
    protected $sexo;
    protected $telefone;
    protected $celular;
    protected $endereco;
    protected $email;
    
    public function __construct($nome, $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
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

    public function getTelefone() {
        return $this->telefone;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getEndereço() {
        return $this->endereco;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
        return $this;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
        return $this;
    }

    public function setEndereço($endereço) {
        $this->endereco = $endereço;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

}
