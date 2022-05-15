// Inserção de Registros
function criar_nota(){
    var dados = $('#frm_cadastroNota').serialize();
        $.ajax({
            method: 'POST',
        	url: 'nota/create_nota.php',
        	data: dados,
        	beforeSend: function(){
        		$("#h2").html("Processo em andamento...");
        	}
        })
        .done(function(msg){
            $("#h2").html("Retorno da inclusão...");
            $("#resposta").html(msg);
            alert("Dados cadastrados com sucesso!");
			setTimeout(function() {
				window.location.reload(1);
			}, 2500);
        })
    return false;
}

// Exclusão de Registros
function deletar_nota(){
    var dados = $('#frm_cadastroNota').serialize();
    $.ajax({
        method: 'POST',
        url: 'nota/delete_nota.php',
        data: dados,
        beforeSend: function(){
        	$("#h2").html("Processo em andamento...");
        }
    })
    .done(function(msg){
        $("#h2").html("Retorno da inclusão...");
        $("#resposta").html(msg);
        alert("Dados cadastrados com sucesso!");
		setTimeout(function() {
			window.location.reload(1);
		}, 2500);
    })
    return false;
};

function deletar_nota_bloco(mat){
    $.ajax({
        method: 'GET',
        url: "excluir.php?matricula=" + mat + '"',
    })

    .done(function(){
		setTimeout(function() {
			window.location.reload(1);
		}, 1);
    })
    return false;
};