<?php
$descricao[0] = "Cimento";
$descricao[1] = "Areia Lavada";
$descricao[2] = "Areia saibrosa";
$descricao[3] = "Brita";
$descricao[4] = "Ferro estrutural 3/8";
$descricao[5] = "Ferro estrutural 15/16";
$descricao[6] = "Argamassa";
$descricao[7] = "Cerâmica comercial";
$descricao[8] = "Tijolo 20x20 ABNT";
$descricao[9] = "Vigota (Angelim)";
$descricao[10] = "Vigota (Ipê)";
$descricao[11] = "Ripão";
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="resources/css/materialConstrucao.css" media="screen"/>
    </head>
    <body>
        <table border="2">
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Consultar</th>
            </tr>
            <?php
            for ($index = 0; $index < count($descricao); $index++) {
                $cor = "#FBF5EF";
                if ($index % 3 == 0) {
                    $cor = "#31B404";
                }
                echo ("<tr bgcolor = $cor>");
                echo "<td>$index</td>";
                echo "<td>$descricao[$index]</td>";
                echo "<td><button>Consultar</button></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>