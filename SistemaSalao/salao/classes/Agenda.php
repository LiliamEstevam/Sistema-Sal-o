<?php

class Agenda
{
    private $data;
    private $hora;
    private $funcionario;
    private $cliente;
    private $servico;
    private $codAgenda;

    function __construct($data, $hora, $cliente, $funcionario, $codAgenda, $servico,)
    {
        $this->data = $data;
        $this->hora = $hora;
        $this->cliente = $cliente;
        $this->funcionario = $funcionario;
        $this->codAgenda = $codAgenda;
        $this->servico = $servico;
    }

    function setData($data)
    {
        $this->data = $data;
    }

    function getData()
    {
        return $this->data;
    }

    function setHora($hora)
    {
        $this->hora = $hora;
    }

    function getHora()
    {
        return $this->hora;
    }
    function setFuncionario($funcionario)
    {
        $this->funcionario = $funcionario;
    }

    function getFuncionarios()
    {
        return $this->funcionario;
    }
    function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    function getCliente()
    {
        return $this->cliente;
    }
    function setServico($servico)
    {
        $this->servico = $servico;
    }

    function getServico()
    {
        return $this->servico;
    }
   
    function setcodAgenda($codAgenda)
    {
        $this->codAgenda = $codAgenda;
    }

    function getcodAgenda()
    {
        return $this->codAgenda;
    }
}
