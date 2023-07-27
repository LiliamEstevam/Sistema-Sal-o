<?php

    $cpfAntigo = $_REQUEST['cpfAntigo'];
    $cpfCliente = $_REQUEST['cpfCliente'];
    $nomeCliente = $_REQUEST['nomeCliente'];
    
    require_once '../classes/Salao.php';
    $salao = new Salao();

   
    $cliente = $salao->buscarCliente($cpfAntigo);
    $cliente->setCpf($cpfCliente);
    $cliente->setNome($nomeCliente);
?>
<script>
    alert('Cliente alterado com sucesso!!!');
    window.location.href = "../cliente1.php";
</script>


 

  