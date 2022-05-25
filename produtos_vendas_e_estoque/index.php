<!doctype html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="img/icon.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="div_entrar">
            <h1>Entrar no sistema</h1>
            <div id="div_login">
                <form name="form_login" method="POST" action="" id="form_login"><br>
                    <label>Login</label>
                    <input type="text" name="user" id="user" placeholder="Gustavo"><br><br>
                    <label>Senha</label>
                    <input type="password" name="password" id="password" placeholder="Senha"><br><br>
                    <input type="button" name="login" id="login" value="Entrar" onclick="log_in();">
                </form>
            </div>
        </div>
        <script src="js/login.js"></script>
    </body>
</html>
