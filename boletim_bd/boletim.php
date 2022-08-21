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
                <table>
                <?php
                    include_once "clsBoletim.php";
                    $vlBoletim = new clsBoletim;
                    $matricula = $_POST['matricula'];
                    $aluno = $_POST['nome'];
                    $vlBoletim->setNota1($_POST['nota1']);
                    $vlBoletim->setNota2($_POST['nota2']);
                    $vlBoletim->setNota3($_POST['nota3']);
                    // Exibição
                    echo "<tr>";
                        echo "<td><span>Matrícula</span></td>";
                        echo "<td>$matricula</td>";
                    echo "</tr>";
                        echo "<td><span>Aluno</span></td>";
                        echo "<td>$aluno</td>";
                    echo "<tr>";
                        echo "<td><span>Notas</span></td>";
                        echo "<td>" . $vlBoletim->getNota1() . ", " . $vlBoletim->getNota2() . ", " . $vlBoletim->getNota3() . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td><span>Média</span></td>";
                        echo "<td>" . $vlBoletim->gerarBoletim() . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td><span>Situação</span></td>";
                        echo "<td>" . $vlBoletim->getSituacao() . "</td>";
                    echo "</tr>";
                ?>
                </table>
            </div>
        </main>
        <footer>
        <div>
        <p>Esta página foi criada por <a target="_blank" href="https://github.com/xviigimenez/">Gustavo Gimenez Correa</a> e <a target="_blank" href="https://github.com/GabrielDaloco">Gabriel Rangel Maciel Daloco</a>.</p>
        </div>
        </footer>
    </body>
</html>