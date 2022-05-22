<!doctype html>
<html lang="pt-br">
    <head>
        <title>Estoque</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="img/icon.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div>
            <nav>
                <ul>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="vendas.php">Vendas</a></li>
                    <li><a href="estoque.php"><b>Estoque</b></a></li>
                    <li><a href="relatório.php">Relatório</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <form name="estoque" method="POST" id="form_estoque"><br>
                <label>Código do movimento: </label>
                <input type="number" name="codigo_movimento" id="input_codigo_movimento"><br><br>
                <label>Data do movimento: </label>
                <input type="date" name="data_movimento" id="input_data_movimento"><br><br>
                <label>Tipo: </label>
                <select id="tipo">
                    <option value="entrada">Entrada</option>
                    <option value="saida">Saída</option>
                </select><br><br>
                <label>Código do produto: </label>
                <input type="number" name="codigo_produto" id="input_codigo_produto"><br><br>
                <input type="button" name="enviar" value="Enviar" id="button_enviar">
            </form>
        </div>
    </body>
</html>
