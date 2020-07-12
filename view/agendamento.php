<?php
require_once'../controller/controladorEmpresa.php';
require_once'../controller/controladorDesconto.php';
require'../controller/controladorTecnico.php';
require_once'../controller/controladorAgenda.php';
?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>
	<title>Agendamento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
</head>
<body>
	<main class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-12">
				<form method="post" action="agendamento.php" name="formAgenda" class="formulario-cadastro-agenda">
					<input type="date" name="dataAgendamento" class="form-control my-1">
					<input type="text" name="nomeCliente" class="form-control my-1" placeholder="Nome do cliente">
					<input type="text" name="protocoloSolicitacao" class="form-control my-1" placeholder="Protocolo de solicitação">
					<select name="idTecnico" class="form-control my-3">
					<?php foreach ($tecnico->selectAll() as $key => $value) { ?>
					    	
							<option value="<?php echo $value->id; ?>"><?php echo $value->nomeTecnico; ?></option>

					<?php } ?>
					</select>
					<select name="turno" class="form-control my-3">
						<option value="0">Manhã</option>
						<option value="1">Tarde</option>
						<option value="2">Noite</option>
					</select>
					<select name="idDesconto" class="form-control my-3">
					<?php foreach ($desconto->selectAll() as $key => $value) { ?>
					    	
							<option value="<?php echo $value->id; ?>"><?php echo $value->motivoDesconto; ?></option>

					<?php } ?>
					</select>
					<button type="submit" name="cadastrarAgenda" class="btn btn-primary my-1">Agendar</button>
				</form>
			    
			</div>
        </div>
    </main>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="scripts/jquery.js"></script>
	<script src="scripts/ajax.js"></script>
</body>
</html>