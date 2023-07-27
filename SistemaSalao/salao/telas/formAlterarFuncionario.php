<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/styleMenus.css">
    <title>Formulário para Alterar Funcionário</title>

</head>

<body>
    <?php
    require_once '../classes/Salao.php';

    $cpf = $_REQUEST['cpf'];
    $salao = new Salao();
    $funcionario = $salao->buscarFuncionario($cpf);

    ?>
     <h1> Alterar cadastro de Funcionários </h1>
    <div id='conteudo'>
        <form action="./alterarFuncionario.php?">
            <input type='hidden' name="cpfAntigo" value='<?= $funcionario->getCpf() ?>'>
            <p>
               CPF do Funcionário:
                <input type="number" name="cpfFuncionario" value='<?= $funcionario->getCpf() ?>'>
            </p>
            <p>
                Nome do Funcionário:
                <input type="text" name="nomeFuncionario" value='<?= $funcionario->getNome() ?>'>
            </p>
            <p>
                Serviço:
                <input type="text" name="servicoFuncionario" value='<?= $funcionario->getServico() ?>'>
            </p>

            <input type="submit" value="Enviar">
            <a href="../funcionario1.php" role="button"> Voltar </a>
        </form>
    </div>

</body>

</html>