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
            <form name="cliente">
                <label for="nome">Nome</label><br>
		        <input type="text" name="nome" id="nome" placeholder="marselo"><br><br>
                <label for="email   ">Email</label><br>
		        <input type="text" name="email" id="email" placeholder="ronaldo@fenomeno.com"><br><br>
                <label for="senha">Senha</label><br>
		        <input type="password" name="senha" id="senha"><br><br>
                <div>			        
                    <input type="button" name="cadastrar" value="Cadastrar">
			        <input type="button" name="apagar" value="Apagar">
		        </div>
            </form>
        </main>
        <footer>
            <p>Esta página foi criada por <a target="_blank" href="https://github.com/xviigimenez/">Gustavo Gimenez Correa</a> e <a target="_blank" href="https://github.com/GabrielDaloco">Gabriel Rangel Maciel Daloco</a>.</p>
        </footer>
    </body>
</html>
