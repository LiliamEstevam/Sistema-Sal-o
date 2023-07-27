<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/styleMenus.css">
  <title>Cliente</title>
</head>

<body>


  <?php
        require_once './classes/Salao.php';
        $salao = new Salao();
        $funcionarios = $salao->getFuncionarios();
        
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
                    <th colspan="4">Funcionários Cadastrados</th>
                </tr>
                <tr>
                    <th>CPF</th><th>Nome</th><th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                //Percorrendo o vetor de clientes para criar as linhas da tabela
                foreach ($funcionarios as $funcionarios):
            ?>
                <tr>
                    <td>
                        <?= $funcionarios->getCpf() ?>
                    </td>
                    <td>
                        <?= $funcionarios->getNome() ?>
                    </td>
                    <td>
                        <a href="./telas/formAlterarFuncionario.php?cpf=<?= $funcionarios->getCpf() ?>">
                            📝
                        </a>
                    </td>
                    <td>
                        <a href="./telas/removerFuncionario.php?cpf=<?= $funcionarios->getCpf() ?>">
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
<a href="telas/formCadFuncionario.php"><button>Cadastrar Funcionário </button></a>
<a href="index.php"><button>Voltar</button></a>
</div>

</html>