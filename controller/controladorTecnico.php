<?php
  
    require_once'../model/Tecnico.php';
      
    $tecnico = new Tecnico();

	//######################################################################################
	// cadastrar tecnico ===============================================================
	//######################################################################################

	if (isset($_GET['flag']) && $_GET['flag'] == 'cadastrarTecnico') {
		$nomeTecnico = trim(strtoupper($_POST['nomeTecnico']));
		$idEmpresa = trim($_POST['idEmpresa']);
		$tecnico->setNomeTecnico($nomeTecnico);
		$tecnico->setIdEmpresa($idEmpresa);
		$tecnico->insert();

	}
	//######################################################################################
	// editar usuario ===================================================================
	//######################################################################################
	if (isset($_GET['flag']) && $_GET['flag'] == 'editarTecnico')  {
		$id = trim($_POST['id']);
		$nomeTecnico = trim(strtoupper($_POST['nomeTecnico']));
		$tecnico->setNomeTecnico($nomeTecnico);
		$tecnico->setId($id);
		$tecnico->update($id);
	}
  


?>
