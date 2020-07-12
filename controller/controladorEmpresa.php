<?php
  
    require_once'../model/Empresa.php';
      
    $empresa = new Empresa();

	//######################################################################################
	// cadastrar empresa ===============================================================
	//######################################################################################

	if (isset($_GET['flag']) && $_GET['flag'] == 'cadastrarEmpresa') {
		$nomeEmpresa = trim(strtoupper($_POST['nomeEmpresa']));
		$empresa->setNomeEmpresa($nomeEmpresa);
		$empresa->insert();

	}
	//######################################################################################
	// editar empresa ===================================================================
	//######################################################################################
	if (isset($_GET['flag']) && $_GET['flag'] == 'editarEmpresa')  {
		$id = $_POST['id'];
		$nomeEmpresa = trim(strtoupper($_POST['nomeEmpresa']));
		$empresa->setNomeEmpresa($nomeEmpresa);
		$empresa->setId($id);
		$empresa->update($id);
	}
  


?>