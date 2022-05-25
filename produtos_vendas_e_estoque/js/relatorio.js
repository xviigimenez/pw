//consulta as informações na tabela produtos
$(document).ready(function() {
    $.ajax({
        method: 'POST',
        url: 'produtos/relatorio.php',
    })
        
    .done(function(msg){
        $("#prod_produto").html("Produtos");
        var relatorio = JSON.parse(msg);

        var bloco = '';
        for(var i = 0; i <= relatorio.length; i++)
        {
            bloco = "<tbody>";
            bloco += "<td>" + relatorio[i].cod_prod + "</td>";
            bloco += "<td>"+ relatorio[i].descricao + "</td>";
            bloco += "<td>" + relatorio[i].valor + "</td>";
            bloco += "<td>" + relatorio[i].vencimento +  "</td>";
            bloco += "</tbody>";
            $("#resposta1").append(bloco);
        }
    })
    return false;
});

//consulta as informações de uma junção das tabelas de vendas e produtos
$(document).ready(function() {
    $.ajax({
        method: 'POST',
        url: 'vendas/relatorio.php',
    })
        
    .done(function(msg){
        $("#prod_vendas").html("Vendas");
        var relatorio = JSON.parse(msg);

        var bloco = '';
        for(var i = 0; i <= relatorio.length; i++)
        {
            var total = parseFloat((relatorio[i].valor * relatorio[i].quantidade).toFixed(2));

            bloco = "<tbody>";
            bloco += "<td>" + relatorio[i].cod_venda + "</td>";
            bloco += "<td>"+ relatorio[i].cod_prod + "</td>";
            bloco += "<td>" + relatorio[i].descricao + "</td>";
            bloco += "<td>" + relatorio[i].quantidade +  "</td>";
            bloco += "<td>R$:" + total +  "</td>";
            bloco += "</tbody>";
            $("#resposta2").append(bloco);
        }
    })
    return false;
});

//consulta as informações de uma junção das tabelas de estoque e produtos
$(document).ready(function() {
    $.ajax({
        method: 'POST',
        url: 'estoque/relatorio.php',
    })
        
    .done(function(msg){
        $("#prod_estoque").html("Estoque");
        var relatorio = JSON.parse(msg);

        var bloco = '';
        for(var i = 0; i <= relatorio.length; i++)
        {
            bloco = "<tbody>";
            bloco += "<td>" + relatorio[i].cod_movto + "</td>";
            bloco += "<td>"+ relatorio[i].data_movto + "</td>";
            bloco += "<td>" + relatorio[i].tipo + "</td>";
            bloco += "<td>" + relatorio[i].descricao +  "</td>";
            bloco += "</tbody>";
            $("#resposta3").append(bloco);
        }
    })
    return false;
});