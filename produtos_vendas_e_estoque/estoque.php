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
                    <li><a href="relatorio.php">Relatório</a></li>
                </ul>
            </nav>
        </div>
        <div id="div_estoque">
            <form name="estoque" method="POST" action="" id="form_estoque"><br>
                <label>Código do movimento: </label>
                <input type="number" name="cod_movto" id="cod_mvto"><br><br>
                <label>Data do movimento: </label>
                <input type="date" name="data_mvto" id="data_mvto"><br><br>
                <label>Tipo: </label>
                <select id="tipo" name="tipo">
                    <option value="Entrada">Entrada</option>
                    <option value="Saida">Saida</option>
                </select><br><br>
                <label>Código do produto: </label>
                <input type="number" name="cod_prod" id="cod_prod"><br><br>
                <input type="button" name="enviar" value="Enviar" id="button_enviar" onclick="inserir();"><br>
            </form>
        </div>

        <script src="js/estoque.js"></script>
    </body>
</html>
