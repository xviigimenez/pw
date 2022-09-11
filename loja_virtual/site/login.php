<!doctype html>
<html>
    <head>
        <title>J&R - Jimas & Rangel</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <!-- Por enquanto, utilizando o mesmo arquivo da página de cadastro -->
         <!-- Se quiser deixa assim, tá só o fino -->
        <link rel="stylesheet" type="text/css" href="css/cadastro.css">
        <link rel="icon" type="image/x-icon" href="css/favicon.ico">
    </head>
        <header>
        </header>
        <main>
            <div class="cadastro">
                <form action="" method="POST" name="frm_cliente" id="frm_cliente">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="ronaldo@fenomeno.com"><br>
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="*******"><br>
                    <input type="button" id="entrar" name="botao" value="Entrar" onclick="logarCliente()"><br>
                </form>
            </div>
            <p><a href="cadastro.php">Ainda não possui cadastro? Clique aqui para fazer o seu.</a></p>
            <div class="banner">
            </div>
        </main>
        <footer>
        </footer>
        <script src="js/eventos.js"></script>
    <body>
    </body>
</html>
