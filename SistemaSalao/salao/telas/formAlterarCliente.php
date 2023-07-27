<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/styleMenus.css">
    <title>Alterar cliente</title>

</head>

<body>
    <?php
    require_once '../classes/Salao.php';

    $cpf = $_REQUEST['cpf'];
    $salao = new Salao();
    $cliente = $salao->buscarCliente($cpf);

    ?>
    <h1> Alterar cadastro de Cliente </h1>
    <div classe="conteudo">
        <form action="./alterarCliente.php?">
            <input type='hidden' name="cpfAntigo" value='<?= $cliente->getCpf() ?>'>
            <p>
                CPF do cliente:
                <input type="number" name="cpfCliente" value='<?= $cliente->getCpf() ?>' id="cpf">
            </p>
            <p>
                Nome do Cliente:
                <input type="text" name="nomeCliente" value='<?= $cliente->getNome() ?>'id="nome">
            </p>
            <p>
                Restrições ou alergias:
                <input type="text" name="restricaoCliente" value='<?= $cliente->getRestricao() ?>' id="restricao">
            </p>
            
            <input type="submit" value="Salvar">
            <a href="../cliente1.php" role="button">Voltar </a>
        </form>
    </div>

</body>

</html>