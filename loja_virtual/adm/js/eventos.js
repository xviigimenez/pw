function cadastrarCliente(){
    var dados = $('#frm_cliente').serialize();
    $.ajax({
        method: 'POST',
        url: 'php/controle_cliente.php',
        data: dados
    })

    .done(function(msg){
        alert(msg);
        $('#cpf').val('');
        $('#nome').val('');
        $('#email').val('');
        $('#senha').val('');
    })
    return false;
}

function apagarCliente(){
    var dados = $('#frm_cliente').serialize();
    $.ajax({
        method: 'POST',
        url: 'php/controle_cliente.php',
        data: dados
    })

    .done(function(msg){
        alert(msg);
        $('#cpf').val('');
    })
    return false;
}

function consultarCliente(){
    var dados = $('#frm_cliente').serialize();
    $.ajax({
        method: 'POST',
        url: 'php/controle_cliente.php',
        data: dados
    })

    .done(function(msg){
        var desempacotado = JSON.parse(msg);
        
        for(var i = 0; i <= desempacotado.length; i++)
        {
            bloco =     "<tr>"
            bloco +=    "<td>" + desempacotado[i].cpf + "</td>";
            bloco +=    "<td>" + desempacotado[i].nome + "</td>";
            bloco +=    "<td>" + desempacotado[i].email + "</td>";
            bloco +=    "<td>" + desempacotado[i].senha + "</td>";
            bloco +=    "</tr>"
            $("#consulta").append(bloco);
        }
    })
    return false;
}

//-------------------------------------------------------------------------------

function cadastrarProduto(){
    var dados = new FormData($('#frm_produto')[0]);
    $.ajax({
        method: 'POST',
        url: 'php/controle_produto.php',
        data: dados,
        processData: false,
        contentType: false
    })

    .done(function(msg){
        alert(msg);
        $('#id').val('');
        $('#produto').val('');
        $('#preco').val('');
        $('#descricao').val('');
        $('#foto').val('');
    })
    return false;
}

function apagarProduto(){
    var dados = new FormData($('#frm_produto')[0]);
    $.ajax({
        method: 'POST',
        url: 'php/controle_produto.php',
        data: dados,
        processData: false,
        contentType: false
    })

    .done(function(msg){
        alert(msg);
        $('#id').val('');
    })
    return false;
}

function consultarProduto(){
    $.ajax({
        url: 'php/controle_produto.php'
    })

    .done(function(msg){
        var desempacotado = JSON.parse(msg);
        
        for(var i = 0; i <= desempacotado.length; i++)
        {
            bloco =     "<tr>"
            bloco +=    "<td>" + desempacotado[i].id + "</td>";
            bloco +=    "<td>" + desempacotado[i].nome_prod + "</td>";
            bloco +=    "<td>" + desempacotado[i].preco + "</td>";
            bloco +=    "<td>" + desempacotado[i].descricao + "</td>";
            bloco +=    "<td><img src='http://localhost/pw/loja_virtual/imagens/" + desempacotado[i].foto + "'width='50px' height='50px'></td>";
            bloco +=    "</tr>"
            $("#consulta").append(bloco);
        }
    })
    return false;
}