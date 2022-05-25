// Insere informações na tabela de vendas
function inserir(){
    var dados = $('#form_venda').serialize();
    $.ajax({
        method: 'POST',
        url: "vendas/inserir.php",
        data: dados,
    })
        
    .done(function(msg){
        if(msg == "inserido"){
            alert('Foi inserido!');
        }
        else{
            alert("Deu erro.");
        }

        document.getElementById('cod_venda').value = "";
        document.getElementById('cod_prod').value = "";
        document.getElementById('qtd').value = "";
        document.getElementById('data').value = "";
    })
    return false;
};
