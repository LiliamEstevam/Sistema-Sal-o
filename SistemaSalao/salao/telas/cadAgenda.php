<?php
require_once '../classes/Salao.php';
require_once '../classes/Agenda.php';

$salao = new Salao();

$data = $_REQUEST['data'];
$hora = $_REQUEST['hora'];
$cpfFuncionario = $_REQUEST['cpfFuncionario'];
$cpfCliente =  $_REQUEST['cpfCliente'];
$servico = $_REQUEST['codServico'];
$codAgenda = $_REQUEST['codAgenda'];

$cliente = $salao->buscarCliente($cpfCliente);
$funcionario = $salao->buscarFuncionario($cpfFuncionario);
$servico = $salao ->buscarServico('codServico');


$agenda = new Agenda($data, $hora, $cliente, $funcionario, $codAgenda, $servico);

$sucesso = $salao->cadastrarAgenda($agenda);

if ($sucesso) {
  echo "<h2>Agenda cadastrado com sucesso!</h2>";
} else {
  echo "<h2>Agenda com codigo informado já está cadastrado!</h2>";
}

foreach ($salao->getAgendas() as $agenda) {
  echo $agenda->getcodAgenda() . " " . $agenda->getCliente()->getNome() . "<br>";
  //mostrar mais coisa na agenda se quiser;
}
?>
<script>
    alert('Agenda cadastrada com sucesso!!!');
    window.location.href = "../agenda1.php";
</script>
