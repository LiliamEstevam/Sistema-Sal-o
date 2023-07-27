<?php

class Cliente
{
    private $cpf;
    private $nome;
    private $restricao;

    function __construct($cpf, $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    function setCpf($cpf){
        $this->cpf = $cpf;
    }

    function getCpf(){
        return $this->cpf;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getNome(){
        return $this->nome;
    }
  function setRestricao($restricao){
        $this->restricao = $restricao;
    }

    function getRestricao(){
        return $this->restricao;
    }
}