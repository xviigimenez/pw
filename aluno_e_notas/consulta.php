<!doctype html> <html lang="pt-br"> 
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="imagem/png" href="img/icon.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Consulta</title>

        <style>
        
        </style>
    </head>
    <body>
		<div>
			<nav>
				<ul>
	        		<li><a href="inserir.php">Alunos</a></li>
       				<li><a href="notas.php">Notas</a></li>
        			<li><a href="consulta.php"><b>Consultas</b></a></li>
    			</ul>
			</nav>
		</div>

        <h2 id="titulo_aluno">Retorno do JSON</h2>
        <div>
            <table id="resposta1">
                <thead>
                    <tr>
                        <th><b>Matrícula</b></th>
                        <th><b>Aluno</b></th>
                        <th><b>Nascimento</b></th>
                        <th><b>Excluir</b></th>
                        <th><b>Alterar</b></th>
                    </tr>
                </thead>   
            </table>
        </div>

        <h2 id="titulo_nota">Retorno do JSON</h2>
        <div>
            <table id="resposta2">
                <thead>
                    <tr>
                        <th><b>Matrícula</b></th>
                        <th><b>Nome</b></th>
                        <th><b>Nota1</b></th>
                        <th><b>Nota2</b></th>
                        <th><b>Média</b></th>
                        <th><b>Excluir</b></th>
                        <th><b>Alterar</b></th>
                    </tr>
                </thead>   
            </table>
        </div>

        <script src="js/consulta.js"></script>
    </body>
</html>