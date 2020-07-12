/*###### cadastro tecnico ############################*/
    $('.formulario-cadastro-tecnico').on('submit', function(event){
        event.preventDefault();   
        var data =  $(this).serialize();     
        $.ajax({
            type : "POST",
            url : "../controller/controladorTecnico.php?flag=cadastrarTecnico",
            data : data,
            //contentType: "application/json; charset=utf-8",
            success: function(data) {
                    console.log(data);
                    alert("Sucesso");
                }, 
            error: function(data){
                    alert("Erro! Estamos passando por problemas técnicos.");
                    console.log(data);
                }
        });
    });
    /*##### editar tecnico ##################################*/
    $('.formulario-editar-tecnico').on('submit', function(event){
        event.preventDefault();   
        var data =  $(this).serialize();     
        $.ajax({
            type : "POST",
            url : "../controller/controladorTecnico.php?flag=editarTecnico",
            data : data,
            //contentType: "application/json; charset=utf-8",
            success: function(data) {
                    console.log(data);
                    alert("Sucesso");
                }, 
            error: function(data){
                    alert("Erro! Estamos passando por problemas técnicos.");
                    console.log(data);
                }
        });
    });


    /*###### cadastro empresa  ###################################*/
    $('.formulario-cadastro-empresa').on('submit', function(event){
        event.preventDefault();   
        var data =  $(this).serialize();     
        $.ajax({
            type : "POST",
            url : "../controller/controladorEmpresa.php?flag=cadastrarEmpresa",
            data : data,
            //contentType: "application/json; charset=utf-8",
            success: function(data) {
                    console.log(data);
                    alert("Sucesso");
                }, 
            error: function(data){
                    alert("Erro! Estamos passando por problemas técnicos.");
                    console.log(data);
                }
        });
    });
    /*###### editar empresa ###################################*/
    $('.formulario-editar-empresa').on('submit', function(event){
        event.preventDefault();   
        var data =  $(this).serialize();     
        $.ajax({
            type : "POST",
            url : "../controller/controladorEmpresa.php?flag=editarEmpresa",
            data : data,
            //contentType: "application/json; charset=utf-8",
            success: function(data) {
                    console.log(data);
                    alert("Sucesso");
                }, 
            error: function(data){
                    alert("Erro! Estamos passando por problemas técnicos.");
                    console.log(data);
                }
        });
    });
    /*####### editar desconto ##############################*/
    $('.formulario-editar-desconto').on('submit', function(event){
        event.preventDefault();   
        var data =  $(this).serialize();     
        $.ajax({
            type : "POST",
            url : "../controller/controladorDesconto.php?flag=editarDesconto",
            data : data,
            //contentType: "application/json; charset=utf-8",
            success: function(data) {
                    console.log(data);
                    alert("Sucesso");
                }, 
            error: function(data){
                    alert("Erro! Estamos passando por problemas técnicos.");
                    console.log(data);
                }
        });
    });


    /*###### cadastro agenda ############################*/
    $('.formulario-cadastro-agenda').on('submit', function(event){
        event.preventDefault();   
        var data =  $(this).serialize();     
        $.ajax({
            type : "POST",
            url : "../controller/controladorAgenda.php?flag=cadastrarAgenda",
            data : data,
            //contentType: "application/json; charset=utf-8",
            success: function(data) {
                    console.log(data);
                    alert("Sucesso");
                }, 
            error: function(data){
                    alert("Erro! Estamos passando por problemas técnicos.");
                    console.log(data);
                }
        });
    });



    /*######### filtro ###############*/

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