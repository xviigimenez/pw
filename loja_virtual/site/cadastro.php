<!doctype html>
<html>
    <head>
        <title>J&R - Jimas & Rangel</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/cadastro.css">
        <link rel="icon" type="image/x-icon" href="css/favicon.ico">
    </head>
        <header>
        </header>
        <main>
            <div class="cadastro">
                <form action="" name="frm_cliente" method="POST" id="frm_cliente">
                    <label for="cpf">CPF &nbsp</label> <!-- Gimas, esse &nbsp é o espacinho pra ficar alinhado -->
                    <input type="text" id="cpf" name="cpf" placeholder="123.456.789-00"><br>
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Churros dos Santos"><br>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Equacao@Reta.com"><br>
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="*****"><br>
                    <input type="button" id="cadastrar" name="botao" value="Cadastrar" onclick="cadastrarCliente()"><br>
                </form>
            </div>
            <p><a href="login.php">Já possui cadastro? Clique aqui para fazer login.</a></p>
            <div class="banner">
            </div>
        </main>
        <footer>
        </footer>
        <script src="js/eventos.js"></script>
    <body>
    </body>
</html>
