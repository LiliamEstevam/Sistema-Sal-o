<?php
    require_once '../classes/Salao.php';

    $cpf = $_GET['cpf'];

    $salao = new Salao();
    $salao->removerCliente($cpf);
?>
<script>
    alert('Cliente removido com sucesso!!!');
    window.location.href = "../cliente1.php";
</script>

