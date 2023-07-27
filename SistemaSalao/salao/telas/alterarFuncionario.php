<?php

    $cpfAntigo = $_REQUEST['cpfAntigo'];
    $cpfFuncionario = $_REQUEST['cpfFuncionario'];
    $nomeFuncionario = $_REQUEST['nomeFuncionario'];
    $servicoFuncionario = $_REQUEST['servicoFuncionario'];
    
    require_once '../classes/Salao.php';
    $salao = new Salao();

   
    $funcionario = $salao->buscarFuncionario($cpfAntigo);
    $funcionario->setCpf($cpfFuncionario);
    $funcionario->setNome($nomeFuncionario);
    $funcionario->setServico($servicoFuncionario);
?>
<script>
    alert('funcionario alterado com sucesso!!!');
    window.location.href = "../funcionario1.php";
</script>