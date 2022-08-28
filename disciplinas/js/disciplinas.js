function periodo(){
    $.ajax({
        url: 'php/controle.php'
    })

    .done(function(msg){
        var desempacotado = JSON.parse(msg);

        for(var i = 0; i <= desempacotado.length; i++)
        {
            bloco = "<option value='" + desempacotado[i].periodo + "'>" + desempacotado[i].periodo + "</option>";
            $("#periodo").append(bloco);
        }
    })
    return false;
}

function curso(){
    $.ajax({
        method: 'GET',
        url: "php/controle.php?periodo=" + $("#periodo").val()
    })

    .done(function(msg){
        var desempacotado = JSON.parse(msg);

        $('#curso option:not(:first)').remove();
        $('#disciplina option:not(:first)').remove();

        for(var i = 0; i <= desempacotado.length; i++)
        {
            bloco = "<option value='" + desempacotado[i].curso + "'>" + desempacotado[i].curso + "</option>";
            $("#curso").append(bloco);
        }
    })
    return false;
}

function disciplina(){
    $.ajax({
        method: 'GET',
        url: "php/controle.php?periodo=" + $("#periodo").val() + "&curso=" + $("#curso").val()
    })

    .done(function(msg){
        var desempacotado = JSON.parse(msg);

        $('#disciplina option:not(:first)').remove();

        for(var i = 0; i <= desempacotado.length; i++)
        {
            bloco = "<option value='" + desempacotado[i].disciplina + "'>" + desempacotado[i].disciplina + "</option>";
            $("#disciplina").append(bloco);
        }
    })
    return false;
}