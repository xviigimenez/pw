// Insere informações na tabela produtos
function inserir(){
    var dados = $('#form_produto').serialize();
    $.ajax({
        method: 'POST',
        url: "produtos/inserir.php",
        data: dados,
    })
        
    .done(function(msg){
        if(msg == "inserido"){
            alert('Foi inserido!');
        }
        else{
            alert("Deu erro.");
        }

        document.getElementById('cod_prod').value = "";
        document.getElementById('descricao').value = "";
        document.getElementById('valor').value = "";
        document.getElementById('vencimento').value = "";
    })
    return false;
};

//exclui informações na tabela produtos
function deletar(){
    var dados = $('#form_produto').serialize();
    $.ajax({
        method: 'POST',
        url: "produtos/excluir.php",
        data: dados,
    })
        
    .done(function(msg){
        if(msg == "deletado"){
            alert('Foi excluido!');
        }
        else{
            alert("Deu erro.");
        }
        document.getElementById('cod_prod').value = "";
        document.getElementById('descricao').value = "";
        document.getElementById('valor').value = "";
        document.getElementById('vencimento').value = "";
    })
    return false;
};
