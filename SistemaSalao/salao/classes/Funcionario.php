<?php

class Funcionario
{
    private $cpf;
    private $nome;
    private $servico;

    function __construct($cpf, $nome, $servico)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->servico = $servico;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setServico($servico)
    {
        $this->servico = $servico;
    }

    function getServico()
    {
        return $this->servico;
    }
}
