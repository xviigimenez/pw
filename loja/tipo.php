<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link>
</head>
<body onload="tipo()">

    <a href="relatorios.php"><button>Voltar</button></a>
    <h2>Tipo</h2>

    <div id="servico">
        <label>Data do Serviço: </label>Entre
        <input type="date" name="data_inicio" id="data_inicio" onchange="tipo()">
        e
        <input type="date" name="data_inicio" id="data_fim" onchange="tipo()"><br><br>
    </div>

    <div id="cliente">
        <label>Tipo Cliente:</label>
        <input type="radio" id="Contrato" name="cliente" value="Contrato" onclick="tipo()">Contrato
        <input type="radio" id="Avulso" name="cliente" value="Avulso" onclick="tipo()">Avulso
        <input type="radio" id="Contrato_e_Avulso" name="cliente" value="Contrato_e_Avulso" onclick="tipo()" checked>Contrato e Avulso <br><br>
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