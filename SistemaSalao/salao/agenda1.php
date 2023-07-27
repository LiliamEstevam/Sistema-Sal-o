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
        $agendas = $salao->getAgendas();
        
    ?> 
     <ul class="menu">
    <li><a href="cliente1.php"><button>Cliente </button></a></li>
    <li><a href="servico1.php"><button>Serviço </button></a></li>
    <li><a href="funcionario1.php"><button>Funcionário</button></a></li>
    <li><a href="agenda1.php"><button>Agenda</button></a></li>
  </ul>
    
  <div class="tabelaagenda">
    <section>
        <table>
            <thead>
                <tr>    
                    <th colspan="5">Agenda </th>
                </tr>
                <tr>
                    <th>Data</th><th>Hora</th><th>Funcionário</th>
                    <th>Cliente</th><th colspan="1">Ações</th>
                  
                </tr>
            </thead>
            <tbody>
            <?php
               
                foreach ($agendas as $agenda):
            ?>
                <tr>
                    <td>
                        <?= $agenda->getData() ?>
                    </td>
                    <td>
                        <?= $agenda->getHora() ?>
                    </td>
                    <td>
                        <?= $agenda->getFuncionarios()->getNome() ?>
                    </td>
                 
 
                  
                    <td>
                        <?= $agenda->getCliente()->getNome() ?>
                    </td>
                    
                    <td>
                        <a href="./telas/removerAgenda.php?cpf=<?= $agenda->getCodAgenda() ?>">
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



            </br>
<div class="rodape">
<a href="telas/formCadAgenda.php"><button>Agendar Horário </button></a>
<a href="index.php"><button>Voltar</button></a>
</body>
</div>

</html>