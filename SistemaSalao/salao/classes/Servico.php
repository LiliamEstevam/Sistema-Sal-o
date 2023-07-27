<?php
class Servico
{
    private $codServico; // 0
    private $nome; // 'corte ronaldinho'
    private $tipo; // 'corte na tesoura', 'corte na máquina'
    private $tempo; // 30
    private $descricao; // 'lksajdlkasdf lkasjdflk asjdlkf ajslkfj alk'
    private $valor; // 35

    function __construct($nome, $tipo, $tempo, $descricao, $valor)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
        $this->tempo = $tempo;
        $this->valor = $valor;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }
    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    function getTipo()
    {
        return $this->tipo;
    }
    function setTempo($tempo)
    {
        $this->tempo = $tempo;
    }
    function getTempo()
    {
        return $this->tempo;
    }
    function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    function getDescricao()
    {
        return $this->descricao;
    }
    function setValor($valor)
    {
        $this->valor = $valor;
    }
    function getValor()
    {
        return $this->valor;
    }
    function setCodServico($codServico)
    {
        $this->codServico = $codServico;
    }
    function getCodServico()
    {
        return $this->codServico;
    }
}
