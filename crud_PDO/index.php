<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="imagem/png" href="icon.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>CRUD</title>
    </head>
    <body>
        <?php
            include "./table.php";
        ?>
        <div class="tabela">
            <h1>Formulário de cadastro</h1>
            <form name="cadastroAluno" method="POST" action="" id="frm_cadastroAluno"><br>
                <label>Matrícula</label><br>
				<input type="number" name="matricula" id="matricula"><br><br>
                <label>Nome</label><br>
				<input type="text" name="nome" id="nome"><br><br>
                <label>Nascimento</label><br>
				<input type="date" name="dataNasc" id="dataNasc" placeholder="1999-12-31"><br><br>
                <label>Mensalidade</label><br>
				<input type="number" name="mensalidade" step="0.01" id="mensalidade"><br><br>
                <div name="botoes" id="btn_div">
					<input type="submit" name="enviar" value="Cadastrar" id="btn_enviar">
					<input type="reset" name="apagar" value="Apagar" id="btn_apagar">
				</div>
            </form>
        </div>

        <h2 id="h2">Retorno do JSON</h2>
        <div id="resposta">
        </div>

        <script>
            $(document).ready(function() {
                $('#btn_enviar').click(function() {
                    var dados = $('#frm_cadastroAluno').serialize();
                    $.ajax({
                        method: 'POST',
                        url: 'create.php',
                        data: dados,
                        beforeSend: function() {
                        $("#h2").html("Processo em andamento...");
                        }
                    })
                    .done(function(msg){
                        $("#h2").html("Retorno da inclusão...");
                        $("#resposta").html(msg);
                        alert("Dados cadastrados com sucesso!");
						setTimeout(function() {
						  window.location.reload(1);
						}, 2500);
                    })
                    return false;
                })
            });
        </script>
    </body>
</html>