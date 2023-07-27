<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/styleMenus.css">
    <title>Cadastro de Serviço</title>

</head>

<body>
<h1> Cadastro de Serviço </h1>
    <div class='conteudo'>

        <form action="./cadServico.php" method="post" id='cadServico'>
            <label>
                Codigo do serviço:
                <input type="number" name="codServico">
            </label>
            <br>
            <label>
                Nome do Serviço:
                <input type="text" name="nomeServico">
            </label>
            <br>
            <label>
                Tipo de Serviço:
                <input type="text" name="tipoServico">
            </label>
            <br>
            <label>
                Tempo de duração:
                <input type="number" name="tempoServico">
            </label>
            <br>
            <label>
                Descrição:
                <input type="text" name="descricaoServico">
            </label>
            <br>
            <label>
                Valor do Serviço:
                <input type="number" name="valorServico">
            </label>
            <br>

            <input type="submit" value="Salvar">
            <a href="../servico1.php" role="button">Voltar </a>
        </form>
    </div>

</body>

</html>