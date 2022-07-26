<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link>
</head>
<body>
    <h1>Lojas Minions</h1>
    <div id="formulario">
        <form action="POST" method="" name="form_loja" id="form_loja">
            <label>Pedido:</label>
            <input type="number" name="pedido" id="pedido"><br><br>

            <label>Tipo Cliente:</label>
            <input type="radio" id="Contrato" name="cliente" value="Contrato" checked>Contrato 
            <input type="radio" id="Avulso" name="cliente" value="Avulso">Avulso <br><br>

            <label>Serviço:</label>
            <select name="servico_form" id="servico_form">
                <option value="rede">Rede</option>
                <option value="sistema">Sistema</option>
                <option value="hardware">Hardware</option>
            </select><br><br>

            <label>Data do Serviço:</label>
            <input type="date" name="data" id="data"><br><br>

            <label>Valor</label>
            R$: <input type="number" id="valor" name="valor"><br><br>

            <input type="button" name="incluir" id="incluir" value="Incluir" onclick="inserir()">
            <input type="button" name="excluir" id="excluir" value="Excluir" onclick="deletar()">
            <a href="relatorios.php"><input type="button" name="relatorio" id="relatorio" value="Relatórios"></a>
        </form>
    </div>

    <script src="js/loja.js"></script>
</body>
</html>