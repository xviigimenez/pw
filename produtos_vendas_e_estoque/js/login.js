// Login do usuário
function log_in(){
    var dados = $('#form_login').serialize();
    $.ajax({
        method: 'POST',
        url: "user/login.php",
        data: dados,
    })
        
    .done(function(msg){
        if(msg == 'granted')
        {
            location.href = "inicial.php";
        }
        else
        {
            alert("Dados inseridos estão incorretos!");
            document.getElementById('user').value = "";
            document.getElementById('password').value = "";
        }
    })
    return false;
};
