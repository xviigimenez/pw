// Insere informações na tabela estoque
function inserir(){
    var dados = $('#form_estoque').serialize();
    console.log(dados);
    $.ajax({
        method: 'POST',
        url: "estoque/inserir.php",
        data: dados,
    })
        
    .done(function(msg){
        if(msg == "inserido"){
            alert('Foi inserido!');
        }
        else{
            alert(msg);
        }

        document.getElementById('cod_movto').value = "";
        document.getElementById('data_mvto').value = "";
        document.getElementById('tipo').options.length = 0;
        document.getElementById('cod_prod').value = "";
    })
    return false;
};
