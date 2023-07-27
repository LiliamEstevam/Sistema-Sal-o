<?php

$codServicoAntigo = $_REQUEST['codServicoAntigo'];
$codServico = $_REQUEST['codServico'];
    
    require_once '../classes/Salao.php';
    $salao = new Salao();

    $servico = $salao->buscarServico($codServicoAntigo);
    $servico->setCodServico($codServico);
?>
<script>
    alert('Serviço alterado com sucesso!!!');
    window.location.href = "../servico1.php";
</script>


 