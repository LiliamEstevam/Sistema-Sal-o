<?php
    require_once '../classes/Salao.php';

    $codServico = $_GET['codServico'];

    $salao = new Salao();
    $salao->removerServico($codServico);
?>
<script>
    alert('Serviço removido com sucesso!!!');
    window.location.href = "../servico1.php";
</script>