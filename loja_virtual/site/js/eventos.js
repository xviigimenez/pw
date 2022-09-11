function consultarProduto(){
    $.ajax({
        url: 'php/controle.php'
    })

    .done(function(msg){
        if(msg.slice(0,3) == 'Pel'){
            $(".cards").append('<h1>Acabou os produtos, vai comprar de outra loja.<h1>');
        }
        else{
            var desempacotado = JSON.parse(msg);
            for(var i = 0; i <= desempacotado.length; i++)
            {
                bloco = "<div class='card'>";
                bloco += "<img src='http://localhost/pw/loja_virtual/imagens/" + desempacotado[i].foto + "'>";
                bloco += "<div class='container'>";
                bloco += "<h4><b>" + desempacotado[i].nome_prod + "</b></h4>";
                bloco += "<p>" + desempacotado[i].descricao + "</p>";
                bloco += "<b><p>Preço: R$" + desempacotado[i].preco.replace('.',',') + "</p></b>";
                bloco += "</div>";
                bloco += "</div>";
                $(".cards").append(bloco);
            }
        }  
    })
    return false;
}

function cadastrarCliente(){
    var dados = new FormData($('#frm_cliente')[0]);
    dados.append('botao', 'Cadastrar');

    $.ajax({
        method: 'POST',
        url: 'php/controle.php',
        data: dados,
        processData: false,
        contentType: false
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

function logarCliente(){
    var dados = new FormData($('#frm_cliente')[0]);
    dados.append('botao', 'Entrar');

    $.ajax({
        method: 'POST',
        url: 'php/controle.php',
        data: dados,
        processData: false,
        contentType: false
    })

    .done(function(msg){
        alert(msg);
        $('#email').val('');
        $('#senha').val('');
    })
    return false;
}