<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar agendamentos</title>
    <link rel="stylesheet" type="text/css" href="../style/styleMenus.css">
</head>
<body>
    <?php
        

        require_once '../classes/Salao.php';

        $codAgenda = $_REQUEST['codAgenda'];
        $salao = new Salao();
        $agenda = $salao->buscarAgenda($codAgenda);
        

    ?>
    <div class="conteudo">
        <form action="./alterarAgenda.php?">
            <input type='hidden' name="codAgendaAntigo" value='<?= $agenda->getAgenda() ?>'>

            <p>
                Codigo:
                <input type="number" name="codAgenda" value='<?= $agenda->getCodAgenda() ?>'>
            </p>
            <p>
                Data:
                <input type="date" name="dataAgenda" value='<?= $agenda->getdataAgenda() ?>'>
            </p>
            <p>
                Hora:
                <input type="time" name="horaAgenda" value='<?= $agenda->gethoraAgenda() ?>'>
            </p>
            <p>
                Cliente:
                <input type="text" name="cliente" value='<?= $agenda->getCliente() ?>'>
            </p>
            <p>
                Funcionario:
                <input type="text" name="funcionario" value='<?= $agenda->getFuncionario() ?>'>
            </p>
             <p>
                Serviço:
                <input type="text" name="servico" value='<?= $agenda->getServico() ?>'>
            </p>
            <input type="submit" value="Salvar">
            <a href="../agenda1.php" role="button">Voltar </a>
        </form>
    </div>

       
</body>
</html>
