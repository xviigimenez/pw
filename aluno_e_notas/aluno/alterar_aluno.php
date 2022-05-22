<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="imagem/png" href="../img/icon.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Aluno e notas</title>
    </head>
    <body onload="pegar_aluno(<?php echo $_GET['matricula'] ?>);">
		<div>
			<nav>
				<ul>
	        		<li><a href="../inserir.php">Alunos</a></li>
       				<li><a href="../notas.php">Notas</a></li>
        			<li><a href="../consulta.php">Consultas</a></li>
    			</ul>
			</nav>
		</div>
		
        <div class="tabela">
            <h1>Alteração de aluno</h1>
            <form name="alterarAluno" method="POST" action="" id="frm_alterarAluno"><br>

                <label>Matrícula</label><br>
                    <input type="number" name="matricula" id="matricula" readonly><br><br>

                <label>Nome</label><br>
                    <input type="text" name="nome" id="nome"><br><br>

                <label>Nascimento</label><br>
                    <input type="date" name="dataNasc" id="dataNasc"><br><br>

                <div name="botoes" id="btn_div">
                    <input type="button" name="alterar" value="Alterar" id="btn_alterar" onclick="alterar_aluno();">
                </div>
            </form>
        </div>

        <h2 id="h2">Retorno do JSON</h2>
        <div id="resposta">
        </div>

        <script src="../js/alterar_aluno.js"></script>
    </body>
</html>
