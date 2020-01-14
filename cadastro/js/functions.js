$("#cadastrar").submit(function (event) {
 
    // Stop form from submitting normally
    event.preventDefault();

    console.log('Tentando enviar o formulário'); 

    $.ajax(
        {
            type: 'POST',
            url: "paginas/recursos/cadastrar.php",
            data: {
                chave:'valorizado demais esse AJAX!!',
                hdncontrole: 'UnidosDoTabajaraMamãeFoca!',
                txtcpf: $('#txtcpf').val(),
                txtnome: $('#txtnome').val(),
                txtemail: $('#txtemail').val(),
                txtfixo: $('#txtfixo').val(),
                txtcelular: $('#txtcelular').val(),
                txtsenha: $('#txtsenha').val(),
            //caso envie dados ;) 
            },
            success: function( result ) {
                console.log(result);
                $( "#log-de-ceps").append('<p>' + result + '</p>' );
            },
            error: function (result){
                console.error(result);
            }
    });
});

$("#atualizar-cadastro").submit(function (event) {
 
    // Stop form from submitting normally
    event.preventDefault();

    console.log('Tentando enviar o formulário'); 

    $.ajax(
        {
            type: 'POST',
            url: "paginas/recursos/atualizar-cadastro.php",
            data: {
                chave:'valorizado demais esse AJAX!!',
                hdncontrole: 'UnidosDoTabajaraMamãeFoca!',
                txtcpf: $('#txtcpf').val(),
                txtnome: $('#txtnome').val(),
                txtemail: $('#txtemail').val(),
                txtfixo: $('#txtfixo').val(),
                txtcelular: $('#txtcelular').val(),
                txtsenha: $('#txtsenha').val(),
            //caso envie dados ;) 
            },
            success: function( result ) {
                console.log(result);
                $( "#log-de-ceps").append('<p>' + result + '</p>' );
            },
            error: function (result){
                console.error(result);
            }
    });
});

$("#apagar-cadastro").submit(function (event) {
 
    // Stop form from submitting normally
    event.preventDefault();

    console.log('Tentando enviar o formulário'); 

    $.ajax(
        {
            type: 'POST',
            url: "paginas/recursos/apagar-cadastro.php",
            data: {
                chave:'valorizado demais esse AJAX!!',
                hdncontrole: 'UnidosDoTabajaraMamãeFoca!',
                txtcpf: $('#txtcpf').val(),
                txtnome: $('#txtnome').val(),
                txtemail: $('#txtemail').val(),
                txtfixo: $('#txtfixo').val(),
                txtcelular: $('#txtcelular').val(),
                txtsenha: $('#txtsenha').val(),
            //caso envie dados ;) 
            },
            success: function( result ) {
                console.log(result);
                $( "#log-de-ceps").append('<p>' + result + '</p>' );
            },
            error: function (result){
                console.error(result);
            }
    });
});


$("#consultar-cadastro").click(function (event) {
 
    event.preventDefault();

    console.log('Tentando enviar o formulário'); 

    $.ajax(
        {
            type: 'POST',
            url: "paginas/recursos/consultar-cadastro.php",
            data: {
                chave:'valorizado demais esse AJAX!!',
                hdncontrole: 'UnidosDoTabajaraMamãeFoca!',
                txtnome: $('#txtnome').val(),
                txtcelular: $('#txtcelular').val(),

            //caso envie dados ;) 
            },
            success: function( result ) {
                //console.log(result);
                // Esta Version funciona com o resultado do while e do foreach
                // $( "#buscar-contatos-recebe-resposta").html('<p>' + result + '</p>' );
            
                resultado = JSON.parse(result);

                $.each(resultado, function(i, contato) {
                    console.log(resultado[i].nome);

                    $( "#buscar-contatos-recebe-resposta").append(
                        '<p> Por ID : '
                        + ' | CPF: ' + resultado[i].cpf
                        + ' | Nome: ' + resultado[i].nome
                        + ' | Email: ' + resultado[i].email
                        + ' | Celular: ' + resultado[i].celular
                        + ' | Telefone: ' + resultado[i].fixo
                        + '</p>' );
                });

                $.each(resultado  , function(i, contato) {

                $( "#buscar-contatos-recebe-resposta").append(
                    '<p> Por Apelido : '
                    + 'CPF: ' + contato.cpf
                    + ' | Nome: ' + contato.nome
                    + ' | Email: ' + contato.email
                    + ' | Celular: ' + contato.celular
                    + ' | Telefone: ' + contato.fixo

                    + '</p>' );
                });
            },
            error: function (result){
                console.error(result);
            }
    });
});









