<?php
    require_once '../classes/Salao.php';

    $cpf = $_GET['cpf'];

    $salao = new Salao();
    $salao->removerFuncionario($cpf);
?>
<script>
    alert('Funcionário removido com sucesso!!!');
    window.location.href = "../funcionario1.php";
</script>

