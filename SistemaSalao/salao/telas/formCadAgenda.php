<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/styleMenus.css">
    <title>Cadastrar agendamentos</title>
    
</head>
<?php
    require_once '../classes/Salao.php';


    $salao = new Salao();
    $clientes = $salao->getCliente();
    $funcionarios = $salao->getFuncionarios();
    
?>
<body>
<h1> Cadastro de Horarios </h1>
    <div id='conteudo'>
        <form action="./cadAgenda.php"  method="get">
            <p>
                Data:
                <input type="date" name="data">
            </p>
            <p>
                Hora:
                <input type="time" name="hora">
            </p>
            <p>
                Funcionario:
                <select name='cpfFuncionario'>
                    <?php
                        foreach ($funcionarios as $funcionario) {
                            echo '<option value='.$funcionario->getCpf().'>'.$funcionario->getNome().'</option>';
                        }
                    ?>
                </select>
            </p>
            <p>
                Cliente:
                <select name='cpfCliente'>
                    <?php
                        foreach ($clientes as $cliente) {
                            echo '<option value='.$cliente->getCpf().'>'.$cliente->getNome().'</option>';
                        }
                    ?>
                </select>
            </p>
            <p>
                Servico:                
                <input type="text" name="Servico">
            </p>
             <p>
                Codigo Agenda:
                <input type="number" name="codAgenda">
            </p>
            <input type="submit" value="Salvar">
            <a href="../agenda1.php" role="button">Voltar </a>
        </form>
    </div>
 
</body>
</html>
