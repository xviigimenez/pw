<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="imagem/png" href="img/icon.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Aluno e notas</title>
    </head>
    <body>
		<div>
			<nav>
				<ul>
	        		<li><a href="inserir.php"><b>Alunos</b></a></li>
       				<li><a href="notas.php">Notas</a></li>
        			<li><a href="consulta.php">Consultas</a></li>
    			</ul>
			</nav>
		</div>
        <div class="tabela">
            <h1>Cadastro de aluno</h1>
            <form name="cadastroAluno" method="POST" action="" id="frm_cadastroAluno"><br>
                <label>Matrícula</label><br>
        		<input type="number" name="matricula" id="matricula" placeholder="1"><br><br>
                <label>Nome</label><br>
		        <input type="text" name="nome" id="nome" placeholder="Gustavo"><br><br>
                <label>Nascimento</label><br>
		        <input type="date" name="dataNasc" id="dataNasc" placeholder="2004-08-08"><br><br>
                <div name="botoes" id="btn_div">
			        <input type="button" name="enviar" value="Cadastrar" id="btn_enviar" onclick="cadastro_aluno();">
			        <input type="button" name="apagar" value="Apagar" id="btn_apagar" onclick="deletar_aluno();">
		        </div>
            </form>
        </div>
        <h2 id="h2">Retorno do JSON</h2>
        <div id="resposta">
        </div>
        <script src="js/aluno.js"></script>
    </body>
</html>
