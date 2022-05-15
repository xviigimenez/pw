// Inserção de registros
function cadastro_aluno(){
    var dados = $('#frm_cadastroAluno').serialize();
    $.ajax({
        method: 'POST',
        url: 'aluno/create_aluno.php',
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

// Exclusão de registros
function deletar_aluno(){
    var dados = $('#frm_cadastroAluno').serialize();
    $.ajax({
        method: 'POST',
        url: 'aluno/delete_aluno.php',
        data: dados,

        beforeSend: function(){
        	$("#h2").html("Processo em andamento...");
        }
    })
    .done(function(msg){
        $("#h2").html("Retorno da inclusão...");
        $("#resposta").html(msg);
        alert("Dados deletados com sucesso!");
		setTimeout(function() {
			window.location.reload(1);
		}, 2500);
    })
    return false;
};