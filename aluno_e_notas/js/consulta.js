// Consulta Alunos
$(document).ready(function() {
    $.ajax({
        method: 'POST',
        url: 'aluno/table_aluno.php',
    })
        
    .done(function(msg){
        $("#titulo_aluno").html("Aluno");
        var produtos = JSON.parse(msg.slice(0, -1));

        var bloco = '';
        var count = msg.substr(-1);
        for(var i = 0; i <= count; i++)
        {
            bloco = "<tbody>";
            bloco += "<td>" + produtos[i].matricula + "</td>";
            bloco += "<td>"+ produtos[i].aluno + "</td>";
            bloco += "<td>" + produtos[i].nascimento + "</td>";
            bloco += "<td> <input type='button' name='excluir' value='Excluir'> </td>";
            bloco += "<td> <input type='button' name='alterar' value='Alterar'> </td>";
            bloco += "</tbody>";
            $("#resposta1").append(bloco);
        }
    })
    return false;
});

// Consulta Notas
$(document).ready(function() {
    $.ajax({
        method: 'POST',
        url: 'nota/table_nota.php',
    })
        
    .done(function(msg){
        $("#titulo_nota").html("Notas");
        var produtos = JSON.parse(msg);

        var bloco = '';
        for(var i = 0; i <= produtos.length; i++)
        {
            var media = ((parseFloat(produtos[i].nota_1) + parseFloat(produtos[i].nota_2))/2).toFixed(2);

            if(produtos[i].nota_1 == null || produtos[i].nota_2 == null)
                media = "<a style='color: brown;'> Vazio </a>";
            if(media == 5)
                media = "<a style='color: blue;'>" + media + "</a>";
            if(media < 5)
                media = "<a style='color: red;'>" + media + "</a>";
            else
                media = "<a style='color: green;'>" + media + "</a>";

            bloco = "<tbody>";
            bloco += "<td>" + produtos[i].matricula + "</td>";
            bloco += "<td>"+ produtos[i].aluno + "</td>";
            bloco += "<td>" + produtos[i].nota_1 + "</td>";
            bloco += "<td>" + produtos[i].nota_2 + "</td>";
            bloco += "<td>" + media + "</td>";
            bloco += "<td> <input type='button' href='javascript:void(0)' name='excluir' value='Excluir' onclick='deletar_nota_bloco(" + produtos[i].matricula  + ")'> </td>";
            bloco += "<td> <input type='button' name='alterar' value='Alterar' </td>";
            bloco += "</tbody>";
            $("#resposta2").append(bloco);
        }
    })
    return false;
});