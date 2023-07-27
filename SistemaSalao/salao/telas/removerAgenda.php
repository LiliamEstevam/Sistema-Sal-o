<?php
    require_once '../classes/Salao.php';

    $codAgenda = $_GET['codAgenda'];

    $salao = new Salao();
    $salao->removerAgenda($codAgenda);
?>
<script>
    alert('Agenda removida com sucesso!!!');
    window.location.href = "../agenda1.php";
</script>