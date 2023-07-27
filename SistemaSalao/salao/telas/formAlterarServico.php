<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/styleMenus.css">
    <title>Formulário para alterar serviço</title>

</head>

<body>
    <?php
    require_once '../classes/Salao.php';

    $codServico = $_REQUEST['codServico'];
    $salao = new Salao();
    $servico = $salao->buscarServico($codServico);

    ?>
    <h1> Alterar serviço cadastrado </h1>
    <div classe="conteudo">
        <form action="./alterarServico.php?">
            <input type='hidden' name="codServicoAntigo" value='<?= $servico->getCodServico() ?>'>

            <p>
                Codigo do serviço:
                <input type="number" name="codServico" value='<?= $servico->getCodServico() ?>'>
            </p>
            <p>
                Nome do Serviço:
                <input type="text" name="nomeServico" value='<?= $servico->getNome() ?>'>
            </p>
            <p>
                Tipo de Serviço:
                <input type="text" name="tipoServico" value='<?= $servico->getTipo() ?>'>
            </p>
            <p>
                Tempo de duração:
                <input type="number" name="tempoServico" value='<?= $servico->getTempo() ?>'>
            </p>
            <p>
                Descrição:
                <input type="text" name="descricaoServico" value='<?= $servico->getDescricao() ?>'>
            </p>
            <p>
                Valor do Serviço:
                <input type="number" name="valorServico" value='<?= $servico->getValor() ?>'>
            </p>

            <input type="submit" value="Salvar">
            <a href="../servico1.php" role="button"> Voltar </a>
        </form>
    </div>
</body>

</html>