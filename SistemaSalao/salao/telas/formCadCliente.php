<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/styleMenus.css">
    <title>Cadastro de Cliente</title>

</head>
<body>
    <h1> Cadastro de Cliente </h1>
   
    <div classe='conteudo'>
        <form action="./cadCliente.php">
    
            <p>
                CPF do cliente:
                <input type="number" name="cpfCliente" id="cpf">
            </p>
            <p>
                Nome do cliente:
                <input type="text" name="nomeCliente" id="nome">
            </p>
            <p>
                Restrições ou alergias:
                <input type="text" name="restricaoCliente" id="restricao">
            </p>
            <input type="submit" value="Salvar">
            <a href="../cliente1.php" role="button">Voltar </a>
            </form>
            
    </div>
 
</body>
</html>