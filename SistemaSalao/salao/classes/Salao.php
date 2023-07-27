<?php

//ROOT constante que armazena o caminho para o diretório raíz do servidor
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
//PASTASISTEMA constante que armazena o nome da pasta que representa o sistema
define('PASTASISTEMA', 'SistemaSalao');
//PATH constante com o caminho completo até a pasta do sistema (dentro do servidor)
define('PATH', ROOT . '/' . PASTASISTEMA . '/');

require_once 'Funcionario.php';
require_once 'Agenda.php';
require_once 'Cliente.php';
require_once 'Servico.php';

class Salao
{
    private $agendas = [];
    private $funcionarios = [];
    private $servicos = [];
    private $clientes = [];
    private $categorias = [];

    function __construct()
    {
        //Se já existe um sistema serializado carrega ele para o objeto criado
        if (file_exists(PATH . 'sistema.save')) {
            $dados = file_get_contents(PATH . 'sistema.save');
            $salao = unserialize($dados);

            $this->funcionarios = $salao->funcionarios;
            $this->agendas = $salao->agendas;
            $this->clientes = $salao->clientes;
            $this->servicos = $salao->servicos;

            //$this->agencias = $sistema->agencias;

        }
    }

    function getFuncionarios()
    {
        return $this->funcionarios;
    }

    function getAgendas()
    {
        return $this->agendas;
    }

    function getServicos()
    {
        return $this->servicos;
    }

    function getCliente()
    {
        return $this->clientes;
    }

    //Antes de destruir serializa o sistema no servidor
    function __destruct()
    {
        $serializado = serialize($this);
        file_put_contents(PATH . 'sistema.save', $serializado);
    } // nao altera nada


    function cadastrarCliente($cliente)
    {
        $aux = $this->buscarCliente($cliente->getCpf());
        if ($aux == null) {
            $this->clientes[] = $cliente;
            return true;
        }
        return false;
    }


    function removerCliente($cpf)
    {
        $indRemover = null;
        foreach ($this->clientes as $ind => $cliente) {
            if ($cliente->getCpf() == $cpf) {
                $indRemover = $ind;
            }
        }
        // var_dump($indRemover);
        if ($indRemover !== null) {
            unset($this->clientes[$indRemover]);
        }
    }
    function buscarCliente($cpf)
    {
        foreach ($this->clientes as $cliente) {
            if ($cliente->getCpf() == $cpf) {
                return $cliente;
            }
        }
        return null;
    }
    function cadastrarFuncionario($funcionario)
    {
        $aux = $this->buscarFuncionario($funcionario->getCpf());
        if ($aux == null) {
            $this->funcionarios[] = $funcionario;
            return true;
        }
        return false;
    }


    function removerFuncionario($cpf)
    {
        $indRemover = null;
        foreach ($this->funcionarios as $ind => $funcionario) {
            if ($funcionario->getCpf() == $cpf) {
                $indRemover = $ind;
            }
        }
        // var_dump($indRemover);
        if ($indRemover !== null) {
            unset($this->funcionarios[$indRemover]);
        }
    }
    function buscarFuncionario($cpf)
    {
        foreach ($this->funcionarios as $funcionario) {
            if ($funcionario->getCpf() == $cpf) {
                return $funcionario;
            }
        }
        return null;
    }
    function cadastrarServico($servico)
    {
        $this->servicos[] = $servico;

        end($this->servicos);
        $id = key($this->servicos);

        $servico->setCodServico($id);
    }
    function removerServico($codServico)
    {
        $indRemover = null;
        foreach ($this->servicos as $ind => $servico) {
            if ($servico->getCodServico() == $codServico) {
                $indRemover = $ind;
            }
        }
        // var_dump($indRemover);
        if ($indRemover !== null) {
            unset($this->servicos[$indRemover]);
        }
    }
    function buscarServico($codServico)
    {
        foreach ($this->servicos as $servico) {
            if ($servico->getCodServico() == $codServico) {
                return $servico;
            }
        }
        return null;
    }

    function cadastrarAgenda($agenda)
    {
        $aux = $this->buscarAgenda($agenda->getcodAgenda());
        if ($aux == null) {
            $this->agendas[] = $agenda;
            return true;
        }
        return false;
    }
    function removerAgenda($codAgenda)
    {
        $indRemover = null;
        foreach ($this->agendas as $ind => $agenda) {
            if ($agenda->getCodAgenda() == $codAgenda) {
                $indRemover = $ind;
            }
        }
        // var_dump($indRemover);
        if ($indRemover !== null) {
            unset($this->agendas[$indRemover]);
        }
    }
    function buscarAgenda($codAgenda)
    {
        foreach ($this->agendas as $agenda) {
            if ($agenda->getCodAgenda() == $codAgenda) {
                return $agenda;
            }
        }
        return null;
    }
}
