<?php
  
    require_once'../model/Agenda.php';
      
    $agenda = new Agenda();

	//######################################################################################
	// cadastrar agenda ===============================================================
	//######################################################################################

	if (isset($_GET['flag']) && $_GET['flag'] == 'cadastrarAgenda') {
		$nomeCliente = trim(strtoupper($_POST['nomeCliente']));
		$data = trim($_POST['dataAgendamento']);
		$dataAgendamento = implode("-",array_reverse(explode("/",$data)));
		$turno = trim($_POST['turno']);
		$protocoloSolicitacao = trim($_POST['protocoloSolicitacao']);
		$idTecnico = trim($_POST['idTecnico']);
		$idDesconto = trim($_POST['idDesconto']);
		$agenda->setNomeCliente($nomeCliente);
		$agenda->setDataAgendamento($dataAgendamento);
		$agenda->setTurno($turno);
		$agenda->setProtocoloSolicitacao($protocoloSolicitacao);
		$agenda->setIdTecnico($idTecnico);
		$agenda->setIdDesconto($idDesconto);
		$agenda->insert();

	}
	//######################################################################################
	// editar agenda ===================================================================
	//######################################################################################
	if (isset($_GET['flag']) && $_GET['flag'] == 'editarEmpresa')  {
		$id = $_POST['id'];
		$nomeEmpresa = trim(strtoupper($_POST['nomeEmpresa']));
		$empresa->setNomeEmpresa($nomeEmpresa);
		$empresa->setId($id);
		$empresa->update($id);
	}
  


?>