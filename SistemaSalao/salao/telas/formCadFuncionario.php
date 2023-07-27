<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/styleMenus.css">
    <title>Cadastro de Funcionário</title>

</head>

<body>
<h1> Cadastro de Funcionário </h1>
    <div id='conteudo'>
        <form action="./cadFuncionario.php" method="post">
            <label>
              CPF do Funcionário:
                <input type="number" name="cpfFuncionario">
            </label>
            <label>
                Nome do Funcionário:
                <input type="text" name="nomeFuncionario">
            </label>
            <label>
                Serviço:
                <input type="text" name="servicoFuncionario">
            </label>

            <input type="submit" value="Salvar">
            <a href="../funcionario1.php" role="button"> Voltar </a>
        </form>
    </div>

</body>

</html>