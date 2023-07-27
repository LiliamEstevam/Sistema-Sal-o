<?php
require_once '../classes/Salao.php';
require_once '../classes/Servico.php';

$salao = new Salao();

// pegando o valor dos campos dos inputs, pelo name, e guardando em variáveis
$nomeServico = $_REQUEST['nomeServico'];
$tipoServico = $_REQUEST['tipoServico'];
$tempoServico = $_REQUEST['tempoServico'];
$descricaoServico = $_REQUEST['descricaoServico'];
$valorServico = $_REQUEST['valorServico'];
$codServico = $_REQUEST['codServico'];


$servico = new Servico(
  $nomeServico,
  $tipoServico,
  $tempoServico,
  $descricaoServico,
  $valorServico,
  $codServico
);

$salao->cadastrarServico($servico);

// mostrando as variáveis na tela
// echo $nomeServico . '<br>';
// echo $tipoServico . '<br>';
// echo $tempoServico . '<br>';
// echo $descricaoServico . '<br>';
// echo $valorServico . '<br>';

foreach ($salao->getServicos() as $servico) {
  echo $servico->getNome() . " " . $servico->getTipo() ." " . $servico->getTempo() ." " . $servico->getDescricao() ." " . $servico->getValor() ." " . $servico->getCodServico() . "<br>";
}?>
<script>
    alert('Serviço cadastrado com sucesso!!!');
    window.location.href = "../servico1.php";
</script>
