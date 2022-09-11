<!doctype html>
<html>
    <head>
        <title>J&R - Produto</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="css/favicon.ico">
    </head>
    <body>
        <header>
            <div class="logo">
                <h1><a href="index.php">J&R</a></h1>
            </div>
            <div class="nav">
                <nav>
                    <ul>
                        <li><a href="cliente.php">Cliente</a></li>
                        <li><a href="produto.php">Produto</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form">
                <form name="produto" action="" method="POST" id="frm_produto" enctype="multipart/form-data">
                    <label for="id">ID</label><br>
		            <input type="text" name="id" id="id" placeholder="2"><br><br>
                    <label for="produto">Produto</label><br>
		            <input type="text" name="produto" id="produto" placeholder="Charutos cubanos"><br><br>
                    <label for="preco">Preço</label><br>
		            <input type="number" name="preco" id="preco" placeholder="100"><br><br>
                    <label for="descricao">Descrição</label><br>
		            <textarea id="descricao" name="descricao" rows="5" cols="33" placeholder="Escreva aqui sobre seu produto..."></textarea><br><br>
                    <label for="foto">Foto</label>
                    <input type="file" id="foto" name="foto"><br><br>
                    <div>			        
                        <input type="button" name="botao" value="Cadastrar" onclick="cadastrarProduto()">
			            <input type="button" name="botao" value="Apagar" onclick="apagarProduto();">
                        <input type="button" name="botao" value="Consultar" onclick="consultarProduto();">
		            </div>
                </form>
            </div>
            <div>
                <h2>Consulta</h2>
                <table border="1" id="consulta">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>Foto</th>
                    </tr>
                </table>
            </div>
        </main>
        <footer>
            <p>Esta página foi criada por <a target="_blank" href="https://github.com/xviigimenez/">Gustavo Gimenez Correa</a> e <a target="_blank" href="https://github.com/GabrielDaloco">Gabriel Rangel Maciel Daloco</a>.</p>
        </footer>

        <script src="js/eventos.js"></script>
    </body>
</html>
