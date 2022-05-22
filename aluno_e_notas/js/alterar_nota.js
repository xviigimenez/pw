//Chama as informações a serem modificadas
function pegar_nota(id) {
    $.ajax({
        method: 'GET',
        url: "../nota/table_nota.php?id_nota=" + id + "",
    })
        
    .done(function(msg){
        $("#titulo_aluno").html("Notas");
        var produtos = JSON.parse(msg);

        document.getElementById('matricula').value = produtos[0].matricula;
        document.getElementById('nome').value = produtos[0].aluno;
        document.getElementById('nota_1').value = produtos[0].nota_1;
        document.getElementById('nota_2').value = produtos[0].nota_2;
    })
    return false;
};

//Modifica as informações
function alterar_notas(id){
    var dados = $('#frm_alterarNota').serialize();
    $.ajax({
        method: 'POST',
        url: "../nota/update_nota.php?id_nota=" + id + "",
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