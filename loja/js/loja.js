//cria dados
function inserir(){
    var dados = $('#form_loja').serialize();
    $.ajax({
        method: 'POST',
        url: 'php/incluir.php',
        data: dados,
    })

    .done(function(msg){
        alert(msg);
        setTimeout(function() {
            window.location.reload(1);
        }, 1);
    })
    return false;
};

//deleta dados
function deletar(){
    var dados = $('#form_loja').serialize();
    $.ajax({
        method: 'POST',
        url: 'php/excluir.php',
        data: dados,
    })

    .done(function(msg){
        alert(msg);
        setTimeout(function() {
            window.location.reload(1);
        }, 1);
    })
    return false;
};

//seleciona todos os dados da tabela pela data
function geral(){
    $.ajax({
        method: 'GET',
        url: 'php/geral.php?data_inicio=' + $("#data_inicio").val() + '&data_fim=' + $("#data_fim").val(),
    })

    .done(function(msg){
        var geral = JSON.parse(msg);

        $("td").remove();
        for(var i = 0; i <= geral.length; i++)
        {
            bloco = "<tbody>";
            bloco += "<td>" + geral[i].pedido + "</td>";
            bloco += "<td>"+ geral[i].tipo_cliente + "</td>";
            bloco += "<td>" + geral[i].servico + "</td>";
            bloco += "<td>" + geral[i].dt_servico +  "</td>";
            bloco += "<td>" + geral[i].valor +  "</td>";
            bloco += "</tbody>";
            $("#resposta").append(bloco);
        }
    })
    return false;
};

//seleciona todos os dados da tabela pelo servico e data
function servico(){
    $.ajax({
        method: 'GET',
        url: 'php/servico.php?data_inicio=' + $("#data_inicio").val() + '&data_fim=' + $("#data_fim").val() + '&servico=' + $("#servico_option option:selected").val(),
    })

    .done(function(msg){
        var servico = JSON.parse(msg);

        $("td").remove();
        for(var i = 0; i <= servico.length; i++)
        {
            bloco = "<tbody>";
            bloco += "<td>" + servico[i].pedido + "</td>";
            bloco += "<td>"+ servico[i].tipo_cliente + "</td>";
            bloco += "<td>" + servico[i].servico + "</td>";
            bloco += "<td>" + servico[i].dt_servico +  "</td>";
            bloco += "<td>" + servico[i].valor +  "</td>";
            bloco += "</tbody>";
            $("#resposta").append(bloco);
        }
    })
    return false;
};

//seleciona todos os dados da tabela pelo tipo e data
function tipo(){
    $.ajax({
        method: 'GET',
        url: 'php/tipo.php?data_inicio=' + $("#data_inicio").val() + '&data_fim=' + $("#data_fim").val() + '&tipo=' + $("#cliente :checked").val(),
    })

    .done(function(msg){
        var tipo = JSON.parse(msg);

        $("td").remove();
        for(var i = 0; i <= tipo.length; i++)
        {
            bloco = "<tbody>";
            bloco += "<td>" + tipo[i].pedido + "</td>";
            bloco += "<td>"+ tipo[i].tipo_cliente + "</td>";
            bloco += "<td>" + tipo[i].servico + "</td>";
            bloco += "<td>" + tipo[i].dt_servico +  "</td>";
            bloco += "<td>" + tipo[i].valor +  "</td>";
            bloco += "</tbody>";
            $("#resposta").append(bloco);
        }
    })
    return false;
};