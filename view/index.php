<?php
    //require_once'../controller/processaFiltro.php';
    require_once'../controller/controladorEmpresa.php';
    require_once'../controller/controladorDesconto.php';
?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>
	<title>Avaliação</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<main class="container">
		<div class="row justify-content-md-center align-items-center">
			<div class="col-sm-12 col-12">
				<div id="filtro">
					<form name="form1" id="form1" class="formulario-filtro" method="post" action="../controller/processaFiltro.php">
						<input type="date" name="dataInicio" class="form-control my-1">
						<input type="date" name="dataFinal" class="form-control my-1">
						<select name="idEmpresa" class="form-control">
					    <?php foreach ($empresa->selectAll() as $key => $value) { ?>
					    	
							<option value="<?php echo $value->id; ?>"><?php echo $value->nomeEmpresa; ?></option>

						<?php } ?>
						</select>

						<input type="submit" name="filtrar" id="filtrar" value="Filtrar" class="btn btn-primary my-3">
					</form>
				</div>
				<div id="conteudo">
					
				</div/>
				<div>
					
				</div>
		    </div>
        </div>
    </main>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="scripts/jquery.js"></script>
	<script src="scripts/ajax.js"></script>
	<script src="scripts/zepto.js"></script>
	<script type="text/javascript">
	$('.formulario-filtro').on('submit', function(event){
        event.preventDefault();   
        var data =  $(this).serialize();     
        $.ajax({
            url : "../controller/processaFiltro.php",
            data : data,
            type: 'post',
            dataType: 'json',
            success: function(data) {
                    console.log(data);
                    $('#conteudo').empty();
                    $.each(data, function(key,value){
                    	if (value.motivoDesconto != 0) {
                    	    $('#conteudo').append("ID: " + value.id + " Data do agendamento: " + value.dataAgendamento + " Turno: " + value.turno + " Nome do Cliente: " + value.nomeCliente + " Protocolo de solicitação: " + value.protocoloSolicitacao + " Nome da Empresa: " + value.nomeEmpresa + " Nome do Tecnico: " + value.nomeTecnico + " Motivo do desconto: " + value.motivoDesconto + "<br>");
                    	}

                    });
                }, 
            error: function(data){
                    alert("Erro! Estamos passando por problemas técnicos.");
                    console.log(data);
                }
        });
    });
        
	
	</script>
</body>
</html>