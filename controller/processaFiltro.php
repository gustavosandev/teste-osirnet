<?php
  require '../model/Agenda.php';
  
  $agenda = new Agenda();

  
  $idEmpresa = trim($_POST['idEmpresa']);
  $dataInicio = $_POST['dataInicio'];
  $dataFinal = $_POST['dataFinal'];
  
  $filtro = $agenda->select($idEmpresa, $dataInicio, $dataFinal);


  echo json_encode($filtro);
  
      
       