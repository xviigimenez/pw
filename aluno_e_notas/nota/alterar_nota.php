<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="imagem/png" href="../img/icon.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Aluno e notas</title>
        <script>
            if(<?php echo $_GET['id_nota'] ?> == null)
            {
                window.alert("Não existe nota.");
                window.location.href = "../consulta.php";
            }
        </script>
    </head>
    <body onload="pegar_nota(<?php echo $_GET['id_nota'] ?>)">
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
            <h1>Alteração de notas</h1>
            <form name="alterarAluno" method="POST" action="" id="frm_alterarNota"><br>

                <label>Matrícula</label><br>
                    <input type="number" name="matricula" id="matricula" readonly><br><br>

                <label>Nome</label><br>
                    <input type="text" name="nome" id="nome" readonly><br><br>

                <label>Nota 1</label><br>
				    <input type="number" name="nota_1" id="nota_1" placeholder="0-10"><br><br>
                    
				<label>Nota 2</label><br>
				    <input type="number" name="nota_2" id="nota_2" placeholder="0-10"><br><br>

                <div name="botoes" id="btn_div">
                    <input type="button" name="alterar" value="Alterar" id="btn_alterar" onclick="alterar_notas(<?php echo $_GET['id_nota'] ?>);">
                </div>
            </form>
        </div>

        <h2 id="h2">Retorno do JSON</h2>
        <div id="resposta">
        </div>

        <script src="../js/alterar_nota.js"></script>
    </body>
</html>
