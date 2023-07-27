<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/styleMenus.css">
  <title>Serviços</title>
</head>

<body>


  <?php
        require_once './classes/Salao.php';
        $salao = new Salao();
        $servicos = $salao->getServicos();
        
    ?> 
    <ul class="menu">
        <li><a href="cliente1.php"><button>Cliente </button></a></li>
        <li><a href="servico1.php"><button>Serviço </button></a></li>
        <li><a href="funcionario1.php"><button>Funcionário</button></a></li>
        <li><a href="agenda1.php"><button>Agenda</button></a></li>
  </ul>

    <div class="tabela">
   <section>
        <table>
            <thead>
                <tr>    
                    <th colspan="4">Serviço Cadastrados</th>
                </tr>
                <tr>
                    <th>Nome do serviço</th><th>codigo</th><th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //Percorrendo o vetor de clientes para criar as linhas da tabela
                foreach ($servicos as $servicos):
            ?>
                <tr>
                    <td>
                        <?= $servicos->getNome() ?>
                    </td>
                    <td>
                        <?= $servicos->getCodServico() ?>
                    </td>
                    <td>
                        <a href="./telas/formAlterarServico.php?codServico=<?= $servicos->getCodServico() ?>">
                            📝
                        </a>
                    </td>
                    <td>
                        <a href="./telas/removerServico.php?codServico=<?= $servicos->getCodServico() ?>">
                            ❌
                        </a>
                    </td>
                </tr>
            <?php        
                endforeach;
            ?>
            </tbody>
        </table>
    </section>
</div>

    </body>
            </br>
<div class="rodape">
    <a href="telas/formCadServico.php"><button>Cadastrar serviços</button></a>
    <a href="index.php"><button>Voltar</button></a>
</div>

</html>
