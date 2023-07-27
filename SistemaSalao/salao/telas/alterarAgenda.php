<?php
 
    $codAgendaAntigo = $_REQUEST['codAgendaAntigo '];
    $codAgenda = $_REQUEST['codAgenda'];
    
    require_once '../classes/Salao.php';
    $salao = new Salao();

    $agenda = $salao->buscarAgenda($codAgendaAntigo);
    $agenda->setcodAgenda($codAgenda);

?>
<script>
    alert('Agenda alterada com sucesso!!!');
    window.location.href = "../index.php";
</script>
    
    
