<!doctype html>
<html>
    <head>
        <title>J&R - Cliente</title>
        <meta charset="utf-8">
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
                <form name="produto">
                    <label for="produto">Produto</label><br>
		            <input type="text" name="produto" id="produto" placeholder="Charutos cubanos"><br><br>
                    <label ="preco">Preço</label><br>
		            <input type="number" name="preco" id="preco" placeholder="100"><br><br>
                    <label for="descricao">Descrição</label><br>
		            <input type="text" name="descricao" id="descricao" placeholder="Escreva aqui sobre o produto..."><br><br>
                    <label for="foto">Foto</label>
                    <input type="file" id="foto" name="foto"><br><br>
                    <div>			        
                        <input type="button" name="cadastrar" value="Cadastrar">
			            <input type="button" name="apagar" value="Apagar">
		            </div>
                </form>
            </div>
        </main>
        <footer>
            <p>Esta página foi criada por <a target="_blank" href="https://github.com/xviigimenez/">Gustavo Gimenez Correa</a> e <a target="_blank" href="https://github.com/GabrielDaloco">Gabriel Rangel Maciel Daloco</a>.</p>
        </footer>
    </body>
</html>
