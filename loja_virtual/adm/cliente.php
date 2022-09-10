<!doctype html>
<html>
    <head>
        <title>J&R - Cliente</title>
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
                <form name="cliente" action="" method="POST" id="frm_cliente">
                    <label for="cpf">CPF</label><br>
		            <input type="text" name="cpf" id="cpf" placeholder="312.643.231-00"><br><br>
                    <label for="nome">Nome</label><br>
		            <input type="text" name="nome" id="nome" placeholder="marselo"><br><br>
                    <label for="email   ">Email</label><br>
		            <input type="text" name="email" id="email" placeholder="ronaldo@fenomeno.com"><br><br>
                    <label for="senha">Senha</label><br>
		            <input type="password" name="senha" id="senha"><br><br>
                    <div>			        
                        <input type="button" name="botao" value="Cadastrar" onclick="cadastrarCliente()">
			            <input type="button" name="botao" value="Apagar" onclick="apagarCliente()">
                        <input type="button" name="botao" value="Consultar" onclick="consultarCliente()">
		            </div>
                </form>
            </div>
            <div>
                <h2>Consulta</h2>
                <table border="1" id="consulta">
                    <tr>
                        <th>Cpf</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
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
