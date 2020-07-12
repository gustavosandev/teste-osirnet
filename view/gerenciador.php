<?php
require_once'../controller/controladorEmpresa.php';
require_once'../controller/controladorDesconto.php';
require'../controller/controladorTecnico.php';
?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>
	<title>Gerenciador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
</head>
<body>
	<main class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-12">
	
                 <h2>Técnico</h2>
			    <!-- Cadastro Técnico -->
			    <form name="formTecnico" method="POST" action="gerenciador.php" class="formulario-cadastro-tecnico">
					<input type="text" name="nomeTecnico" placeholder="Nome do técnico" class="form-control">
					<select name="idEmpresa">
					    <?php foreach ($empresa->selectAll() as $key => $value) { ?>
					    	
							<option value="<?php echo $value->id; ?>"><?php echo $value->nomeEmpresa; ?></option>

						<?php } ?>
					</select>
					<input type="submit" name="cadastrarTecnico" class="btn m-1">
				</form>
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-12">

				<!-- Editar Técnico -->

				<?php foreach ($tecnico->selectAll() as $key => $value) { ?>
				<form name="formTecnicoEdit" method="POST" class="form-group formulario-editar-tecnico my-4">
					<input type="text" name="nomeTecnico" value="<?php echo $value->nomeTecnico; ?>" class="form-control">
					<input type="hidden" name="id" value="<?php echo $value->id; ?>">
					<button type="submit" name="editarTecnico" class="btn btn-warning m-1">Editar</button>
				</form>

			    <?php } ?>
			</div>
		</div>	
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-12">
			    <h2>Empresa</h2>
				<!-- Cadastro empresa -->
				<form name="formEmpresa" method="POST" class="form-group formulario-cadastro-empresa">
					<input type="text" name="nomeEmpresa" placeholder="Nome da empresa" class="form-control">
					<input type="submit" name="cadastrarEmpresa" class="btn m-1">
				</form>

				<!-- Editar empresa -->
				
				<?php foreach ($empresa->selectAll() as $key => $value) { ?>
				<form name="formEmpresaEdit" method="POST" class="form-group formulario-editar-empresa my-4">
					<input type="text" name="nomeEmpresa" value="<?php echo $value->nomeEmpresa; ?>" class="form-control">
					<input type="hidden" name="id" value="<?php echo $value->id; ?>">
					<button type="submit" name="editarEmpresa" class="btn btn-warning m-1">Editar</button>
				</form>
				
                <?php } ?>
                <?php foreach ($empresa->selectAll() as $key => $value) { ?>

					<p class="p-3"><?php echo $value->nomeEmpresa; ?></p>

				<?php } ?>
               
                <h2>Desconto</h2>
				<!-- Cadastro Desconto -->
				<form name="formDesconto" method="POST" class="form-group">
					<input type="text" name="motivoDesconto" placeholder="Motivo Desconto" class="form-control">
					<input type="submit" name="cadastrarMotivoDesconto" class="btn m-1">
				</form>

				<!-- Editar Desconto -->
				<?php foreach ($desconto->selectAll() as $key => $value) { ?>
				<form name="formDescontoEdit" method="POST" class="form-group formulario-editar-desconto my-4">
					<input type="text" name="motivoDesconto" value="<?php echo $value->motivoDesconto; ?>" class="form-control">
					<input type="hidden" name="id" value="<?php echo $value->id; ?>">
					<button type="submit" name="editarDesconto" class="btn btn-warning m-1">Editar</button>
				</form>
				
                <?php } ?>
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