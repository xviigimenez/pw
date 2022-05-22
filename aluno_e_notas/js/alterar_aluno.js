//Chama as informações a serem modificadas
function pegar_aluno(mat) {
    $.ajax({
        method: 'GET',
        url: "../aluno/table_aluno.php?matricula=" + mat + "",
    })
        
    .done(function(msg){
        $("#titulo_aluno").html("Aluno");
        var produtos = JSON.parse(msg);

        document.getElementById('matricula').value = produtos[0].matricula;
        document.getElementById('nome').value = produtos[0].aluno;
        document.getElementById('dataNasc').value = produtos[0].nascimento;
    })
    return false;
};

//Modifica as informações
function alterar_aluno(){
    var dados = $('#frm_alterarAluno').serialize();
    $.ajax({
        method: 'POST',
        url: '../aluno/update_aluno.php',
        data: dados,
        beforeSend: function(){
        	$("#h2").html("Processo em andamento...");
        }
    })
    .done(function(msg){
        $("#h2").html("Retorno da alteração...");
        $("#resposta").html(msg);
        alert("Dados Alterados!");
		setTimeout(function() {
			window.location.href = "../consulta.php";
		}, 2500);
    })
    return false;
};