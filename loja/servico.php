<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link>
</head>
<body onload="servico()">

    <a href="relatorios.php"><button>Voltar</button></a>
    <h2>Serviço</h2>

    <div id="servico">
        <label>Data do Serviço: </label>Entre
        <input type="date" name="data_inicio" id="data_inicio" onchange="servico()">
        e
        <input type="date" name="data_inicio" id="data_fim" onchange="servico()"><br><br>
    </div>

    <label id="servico">Tipo de Serviço:</label>
    <select name="servico" id="servico_option" onchange="servico()">
        <option value="---">---</option>
        <option value="rede">Rede</option>
        <option value="sistema">Sistema</option>
        <option value="hardware">Hardware</option>
        <option value="tudo">Tudo</option>
    </select><br><br>

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