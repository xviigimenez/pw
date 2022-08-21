<!doctype html>
<html>
    <head>
        <title>Boletim</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="css/favicon.ico">
    </head>
    <body>
        <header>
            <h1>Boletim</h1>
        </header>
        <main>
            <div>
                <form method="POST" action="boletim.php" name="formBoleto">
                    <label for="matricula">Matrícula</label>
                    <input type="number" id="matricula" name="matricula">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome">
                    <label for="nota1">Nota 1</label>
                    <input type="number" min="0" max="10" step=".5" id="nota1" name="nota1">
                    <label for="nota2">Nota 2</label>
                    <input type="number" min="0" max="10" step=".5" id="nota2" name="nota2">
                    <label for="nota3">Nota 3</label>
                    <input type="number" min="0" max="10" step=".5" id="nota3" name="nota3"><br><br>
                    <input type="submit" name="enviar" value="Incluir">
                    <input type="submit" name="enviar" value="Excluir">
                    <input type="submit" name="enviar" value="Pesquisar">
                </form>
            </div>
        </main>
        <footer>
        <div>
        <p>Esta página foi criada por <a target="_blank" href="https://github.com/xviigimenez/">Gustavo Gimenez Correa</a> e <a target="_blank" href="https://github.com/GabrielDaloco">Gabriel Rangel Maciel Daloco</a>.</p>
        </div>
        </footer>
    </body>
</html>
