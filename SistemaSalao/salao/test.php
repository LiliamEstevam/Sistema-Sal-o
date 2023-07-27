<?php
require_once 'classes/Funcionario.php';
require_once 'classes/Cliente.php';
require_once 'classes/Servico.php';
require_once 'classes/Salao.php';

$salao = new Salao();

$servico1 = new Servico(
  0,
  'corte ronaldinho',
  'corte na maquina',
  30,
  'slakjfa slkdjflaskdjklasf',
  35
);

$funcionario = new Funcionario(12312312312, 'Liliam', [$servico1]);
$funcionario2 = new Funcionario(12312312311, 'Lays', [$servico1]);

// $funcionario->adicionarServico($servico1);

// echo '<pre>';
// var_dump($funcionario);
// echo '</pre>';

$salao->cadastrarServico($servico1);
$salao->cadastrarFuncionario($funcionario);
$salao->cadastrarFuncionario($funcionario2);

echo '<pre>';
var_dump($salao);
echo '</pre>';
