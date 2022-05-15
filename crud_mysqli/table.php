<style>
    table, th, td {
        border: 3px;
        border-color: white;
        border-collapse: collapse;
    }
    th, td {
        border-style: groove;
        background-color: lightgray;
        padding: 1px;
    }
    tbody {
        color: black;
	}
</style>

<div>
    <table>
        <thead>
            <tr>
                <th><b>Matrícula</b></th>
                <th><b>Nome</b></th>
                <th><b>Nascimento</b></th>
                <th><b>Mensalidade</b></th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "database_mysqli.php";
                $all = mysqli_query($connect, "select * from `matricula`");
                $total = mysqli_num_rows($all);
                while ($total = mysqli_fetch_array($all)) {
                    echo "<tr>
                              <td>" . $total['matricula'] . "</td>
                              <td>" . $total['nome'] . "</td>
                              <td>" . $total['nascimento'] . "</td>
                              <td>" . $total['mensalidade'] . "</td>
                          </tr>";
                }
            ?>
        </tbody>
    </table>
</div>
