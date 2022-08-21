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
                <?php
                    include_once "clsBoletim.php";
                    $boleto = new clsBoletim;
                    
                    foreach($boleto->pesquisa() as $resultado){
                        $boleto->setNome($resultado['nome']);
                        $boleto->setMatricula($resultado['matricula']);
                        $boleto->setNota1($resultado['nota_1']);
                        $boleto->setNota2($resultado['nota_2']);
                        $boleto->setNota3($resultado['nota_3']);

                        // Exibição
                        echo "<table>";
                        echo "<tr>";
                            echo "<td><span>Matrícula</span></td>";
                            echo "<td>". $resultado['matricula'] ."</td>";
                        echo "</tr>";
                            echo "<td><span>Aluno</span></td>";
                            echo "<td>". $resultado['nome'] ."</td>";
                        echo "<tr>";
                            echo "<td><span>Notas</span></td>";
                            echo "<td>" . $resultado['nota_1'] . ", " . $resultado['nota_2'] . ", " . $resultado['nota_3'] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><span>Média</span></td>";
                            echo "<td>" . round($boleto->gerarBoletim(), 2) . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><span>Situação</span></td>";
                            echo "<td>" . $boleto->getSituacao() . "</td>";
                        echo "</tr>";
                        echo "</table>";
                        echo "<br>";
                    }
                    
                    
                ?>
            </div>
        </main>
        <footer>
        <div>
        <p>Esta página foi criada por <a target="_blank" href="https://github.com/xviigimenez/">Gustavo Gimenez Correa</a> e <a target="_blank" href="https://github.com/GabrielDaloco">Gabriel Rangel Maciel Daloco</a>.</p>
        </div>
        </footer>
    </body>
</html>