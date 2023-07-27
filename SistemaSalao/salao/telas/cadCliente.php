<?php
require_once '../classes/Salao.php';
require_once '../classes/Cliente.php';

$salao = new Salao();

$cpfCliente = $_REQUEST['cpfCliente'];
$nomeCliente = $_REQUEST['nomeCliente'];
$restricao = $_REQUEST['restricaoCliente'];

$cliente = new cliente(
  $cpfCliente,
  $nomeCliente,
  $restricao,
);

$sucesso = $salao->cadastrarcliente($cliente);

if ($sucesso) {
  echo "<h2>Cliente cadastrado com sucesso!</h2>";
} else {
  echo "<h2>Cliente com CPF informado já está cadastrado!</h2>";
}

foreach ($salao->getCliente() as $cliente) {
  echo $cliente->getCpf() . " " . $cliente->getNome() . "<br>";
}
?>
<script>
    alert('Cliente cadastrado com sucesso!!!');
    window.location.href = "../cliente1.php";
</script>