<!doctype html>
<html lang="pt-br">
    <head>
        <title>Produtos</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="img/icon.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div>
            <nav>
                <ul>
                    <li><a href="produtos.php"><b>Produtos</b></a></li>
                    <li><a href="vendas.php">Vendas</a></li>
                    <li><a href="estoque.php">Estoque</a></li>
                    <li><a href="relatório.php">Relatório</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <form name="produto" method="POST" id="form_produto"><br>
                <label>Código do produto: </label>
                <input type="number" name="codigo_produto" id="input_codigo_produto"><br><br>
                <label>Descrição: </label>
                <input type="text" name="descricao" id="input_descricao"><br><br>
                <label>Valor: R$</label>
                <input type="number" name="valor" id="input_valor"><br><br>
                <label>Vencimento: </label>
                <input type="date" name="vencimento" id="input_vencimento"><br><br>
                <input type="button" name="cadastrar" value="Cadastrar" id="button_cadastrar">
                <input type="button" name="excluir" value="Excluir" id="button_excluir">
            </form>
        </div>
    </body>
</html>
