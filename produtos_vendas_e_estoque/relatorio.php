<!doctype html>
<html lang="pt-br">
    <head>
        <title>Relatório</title>
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
                    <li><a href="estoque.php">Estoque</a></li>
                    <li><a href="relatorio.php"><b>Relatório</b></a></li>
                </ul>
            </nav>
        </div>

        <h1 id="prod_produto">Retorno do JSON</h1>
        <div>
            <table id="resposta1">
                <thead>
                    <tr>
                        <th><b>Cod. Produto</b></th>
                        <th><b>Descrição</b></th>
                        <th><b>Valor</b></th>
                        <th><b>Vencimento</b></th>
                    </tr>
                </thead>   
            </table>
        </div><br><br>

        <h1 id="prod_vendas">Retorno do JSON</h1>
        <div>
            <table id="resposta2">
                <thead>
                    <tr>
                        <th><b>Cod. Venda</b></th>
                        <th><b>Cod. Produto</b></th>
                        <th><b>Descrição</b></th>
                        <th><b>Qtde.</b></th>
                        <th><b>Valor Total</b></th>
                    </tr>
                </thead>   
            </table>
        </div><br><br>

        <h1 id="prod_estoque">Retorno do JSON</h1>
        <div id="tab_estoque">
            <table id="resposta3">
                <thead>
                    <tr>
                        <th><b>Cod. Movimento</b></th>
                        <th><b>Data Movimento</b></th>
                        <th><b>Tipo</b></th>
                        <th><b>Descrição</b></th>
                    </tr>
                </thead>   
            </table>
        </div>

        <script src="js/relatorio.js"></script>
    </body>
</html>