<html>
	<head>
		<title>Pagamento</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="form">
			<header><h1>Pagamento</h1></header>
			<form name="pagamento" method="POST" action="" id="form_pagamento"><br>
				<label><h2>Código</h2></label><br>
				<input type="number" name="codigo" id="codigo"><br><br>
				<label><h2>Descrição</h2></label><br>
				<textarea name="descricao" id="descricao"></textarea><br><br>
				<label><h2>Valor</h2></label><br>
				<input type="number" name="valor" id="valor" step="0.01"><br><br>
				<label><h2>Quantidade</h2></label><br>
				<input type="number" name="quantidade" id="quantidade"><br><br>
				<label><h2>Forma de pagamento</h2></label><br>
				<input type="radio" name="forma_de_pagamento" id="a_vista" value="A vista"><label>A vista</label>
				<input type="radio" name="forma_de_pagamento" id="a_prazo" value="A prazo"><label>A prazo</label><br><br>
				<input type="submit" name="enviar" id="enviar" value="Enviar">
				<input type="submit" name="excluir" id="excluir" value="Excluir">
				<input type="reset" name="limpar" id="limpar" value="Limpar">
				<input type="submit" name="con_form" id="con_form" value="Consulta Formul">
				<input type="submit" name="con_bloco" id="con_bloco" value="Consulta Bloco">
			</form>

			<h2 id="h2">Dados</h2><br>	
	        <div id="resultado">
	        </div>

			<!-- javascript -->
			<script>
            $(document).ready(function() {
                $('#enviar').click(function() {
                    var dados = $('#form_pagamento').serialize();
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
                        $("#resultado").html(msg);
                        alert("Dados cadastrados com sucesso!");
						setTimeout(function() {
						  window.location.reload(1);
						}, 2500);
                    })
                    return false;
                })
            });

            $(document).ready(function() {
                $('#excluir').click(function() {
                    var dados = $('#form_pagamento').serialize();
                    $.ajax({
                        method: 'POST',
                        url: 'delete.php',
                        data: dados,
                        beforeSend: function() {
                        $("#h2").html("Processo em andamento...");
                        }
                    })
                    .done(function(msg){
                        $("#h2").html("Retorno da inclusão...");
                        $("#resultado").html(msg);
                        alert("Deletado com sucesso!");
						setTimeout(function() {
						  window.location.reload(1);
						}, 2500);
                    })
                    return false;
                })
            });
			
			$(document).ready(function() {
			$('#con_form').click(function() {
				var dados = $('#form_pagamento').serialize();
				$.ajax({
					method: 'POST',
					url: 'read.php',
					data: dados,
					beforeSend: function() {
						$("#h2").html("Carregando consulta...");
					}
				})
		
				.done(function(msg){
					$("#h2").html("Resultados obtidos!");
					var produtos = JSON.parse(msg.slice(0, -1));
					// Consulta em formulário
					document.getElementById('codigo').value = produtos[0].codigo;
					document.getElementById('descricao').value = produtos[0].descricao;
					document.getElementById('valor').value = produtos[0].valor;
					document.getElementById('quantidade').value = produtos[0].quantidade;

					if(produtos[0].pagamento == "A vista")
						document.getElementById("a_vista").checked = true;
					else
						document.getElementById("a_prazo").checked = true;
				})
				return false;
			})
			});

			$(document).ready(function() {
			$('#con_bloco').click(function() {
				var dados = $('#form_pagamento').serialize();
				$.ajax({
					method: 'POST',
					url: 'read.php',
					data: dados,
					beforeSend: function() {
						$("#h2").html("Carregando consulta...");
					}
				})
		
				.done(function(msg){
					$("#h2").html("Resultados obtidos!");
					var produtos = JSON.parse(msg.slice(0, -1));
					document.getElementById("resultado").innerHTML = "";

					// Consulta em bloco
					var bloco_produtos = '';
					var count = msg.substr(-1);
					for(var i = 0; i <= count; i++)
					{
						bloco_produtos = "Código: " + produtos[i].codigo + "<br>";
						bloco_produtos += "Descrição: " + produtos[i].descricao + "<br>";
						bloco_produtos += "Valor: " + produtos[i].valor + "<br>";
						bloco_produtos += "Quantidade: " + produtos[i].quantidade + "<br>";
						bloco_produtos += "A vista ou a prazo: " + produtos[i].pagamento + "<br>";
						bloco_produtos += "============================== <br>";
						$("#resultado").append(bloco_produtos);
					}
				})
				return false;
			})
			});
			</script>
		</div>
	</body>
</html>