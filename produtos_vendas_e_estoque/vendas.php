<!doctype html>
<html lang="pt-br">
    <head>
        <title>Vendas</title>
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
                    <li><a href="vendas.php"><b>Vendas</b></a></li>
                    <li><a href="estoque.php">Estoque</a></li>
                    <li><a href="relatório.php">Relatório</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <form name="venda" method="POST" id="form_venda"><br>
                <label>Código da venda: </label>
                <input type="number" name="codigo_venda" id="input_codigo_venda"><br><br>
                <label>Código do produto: </label>
                <input type="number" name="codigo_produto" id="input_codigo_produto"><br><br>
                <label>Quantidade: </label>
                <input type="number" name="quantidade" id="input_quantidade"><br><br>
                <label>Data: </label>
                <input type="date" name="data" id="input_data"><br><br>
                <input type="button" name="enviar" value="Enviar" id="button_enviar">
            </form>
        </div>
    </body>
</html>
