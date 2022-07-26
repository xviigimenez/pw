<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link>
</head>
<body onload="geral()">

    <a href="relatorios.php"><button>Voltar</button></a>
    <h2 id="geral">Geral</h2>

    <div id="servico">
        <label>Data do Serviço: </label>Entre
        <input type="date" name="data_inicio" id="data_inicio" onchange="geral()">
        e
        <input type="date" name="data_inicio" id="data_fim" onchange="geral()"><br><br>
    </div>
    
    <div>
        <table id="resposta">
            <thead>
                <tr>
                    <th><b>Pedido</b></th>
                    <th><b>Tipo</b></th>
                    <th><b>Serviço</b></th>
                    <th><b>Data</b></th>
                    <th><b>Valor</b></th>
                </tr>
            </thead>   
        </table>
    </div><br><br>


    <script src="js/loja.js"></script>
</body>
</html>