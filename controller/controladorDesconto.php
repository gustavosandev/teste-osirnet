<?php
  
    require_once'../model/Desconto.php';
      
    $desconto = new Desconto();

	//######################################################################################
	// cadastrar motivo desconto ===============================================================
	//######################################################################################

	if (isset($_POST['cadastrarMotivoDesconto'])) {
		$motivoDesconto = trim($_POST['motivoDesconto']);
		$desconto->setMotivoDesconto($motivoDesconto);
		$desconto->insert();

	}
	//######################################################################################
	// editar motivo desconto ===================================================================
	//######################################################################################
	if (isset($_GET['flag']) && $_GET['flag'] == 'editarDesconto')  {
		$id = $_POST['id'];
		$motivoDesconto = $_POST['motivoDesconto'];
		$desconto->setMotivoDesconto($motivoDesconto);
		$desconto->update($id);
	}
  


?>
