<!doctype html> <html lang="pt-br"> <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="imagem/png" href="img/icon.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Notas</title>
    </head>
    <body>
		<div>
			<nav>
				<ul>
	        		<li><a href="inserir.php">Alunos</a></li>
       				<li><a href="notas.php"><b>Notas</b></a></li>
        			<li><a href="consulta.php">Consultas</a></li>
    			</ul>
			</nav>
		</div>
        <div class="tabela">
            <h1>Cadastro de notas</h1>
            <form name="cadastroAluno" method="POST" action="" id="frm_cadastroNota"><br>
                <label>Matrícula</label><br>
				<input type="number" name="matricula" id="matricula" placeholder="1"><br><br>
				<label>Nota 1</label><br>
				<input type="number" name="nota_1" id="nota_1" placeholder="0-10"><br><br>
				<label>Nota 2</label><br>
				<input type="number" name="nota_2" id="nota_2" placeholder="0-10"><br><br>
                <div name="botoes" id="btn_div">
			<input type="button" name="enviar" value="Cadastrar" id="btn_enviar" onclick="criar_nota();">
			<input type="button" name="apagar" value="Apagar" id="btn_apagar" onclick="deletar_nota();">
		</div>
            </form>
        </div>

        <h2 id="h2">Retorno do JSON</h2>
        <div id="resposta">
        </div>

        <script src="js/notas.js"></script>
    </body>
</html>
