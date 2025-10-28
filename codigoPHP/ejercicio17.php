<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 17</title>
        <style>
            td,tr{
                width: 85px;
                height: 65px;
                background-color: lightgreen;
                border: 1px black solid;
                text-align: center;
            }
            .ocupado{
                background-color: lightcoral;
            }
            .nFila, .nColumna{
                background-color: lightgrey;
            }
        </style>
    </head>

    <body>
        <?php
        /*  @author Cristian Mateos Vega
         *  @since 17/10/2025
         */
        $teatro = [];
        define("NFILAS", 20);
        define("NCOLUMNAS", 15);

        for ($indiceFilas = 0; $indiceFilas < 20; $indiceFilas++) {
            for ($indiceColumnas = 0; $indiceColumnas < 15; $indiceColumnas++) {
                $teatro[$indiceFilas][$indiceColumnas] = null;
            }
        }
        $teatro[6][2] = "juan";
        $teatro[11][6] = "pedro";
        $teatro[12][1] = "pepe";
        $teatro[11][7] = "maria";
        $teatro[0][8] = "javier";

        // FOREACH
        echo "<br>";
        echo "<b>RECORRIDO CON FOREACH</b><br><br>";
        echo '<table>';
        echo "<tr>";
        echo "<td class='nColumna'></td>";
        foreach ($teatro[0] as $nColumna => $fila) {
            echo "<td class='nColumna'> Columna " . ($nColumna + 1) . "</td>";
        }

        echo "</tr>";
        foreach ($teatro as $indiceFilas => $fila) {
            echo "<tr>";
            echo "<td class='nFila'>Fila " . ($indiceFilas + 1) . "</td>";
            foreach ($fila as $indiceColumnas => $valor) {
                if ($valor != null) {
                    echo "<td class='ocupado'>" . $valor . "</td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo '</tr>';
        }
        echo '</table><br>';

        // FOR
        echo "<b>RECORRIDO CON FOR</b><br></br>";
        echo '<table>';
        echo "<tr>";
        echo "<td class='nColumna'></td>";
        foreach ($teatro[0] as $nColumna => $fila) {
            echo "<td class='nColumna'> Columna " . ($nColumna + 1) . "</td>";
        }
        echo "<td class='nColumna'></td>";

        echo "</tr>";
        for ($indiceFilas = 0; $indiceFilas < NFILAS; $indiceFilas++) {
            echo "<tr>";
            echo "<td class='nFila'>Fila " . ($indiceFilas + 1) . "</td>";
            for ($indiceColumnas = 0; $indiceColumnas < NCOLUMNAS; $indiceColumnas++) {
                if ($teatro[$indiceFilas][$indiceColumnas] != null) {
                    echo "<td class='ocupado'>" . $teatro[$indiceFilas][$indiceColumnas] . "</td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "<td class='nFila'>Fila " . ($indiceFilas + 1) . "</td>";
            echo '</tr>';
        }
        echo "<td class='nColumna'></td>";
        foreach ($teatro[2] as $nColumna => $fila) {
            echo "<td class='nColumna'> Columna " . ($nColumna + 1) . "</td>";
        }
        echo "<td class='nColumna'></td>";
        echo '</table><br>';
        // WHILE
        echo "<br>";
        echo "<b>RECORRIDO CON WHILE</b><br><br>";
        echo '<table>';
        echo "<tr>";
        echo "<td class='nColumna'></td>";
        foreach ($teatro[0] as $nColumna => $fila) {
            echo "<td class='nColumna'> Columna " . ($nColumna + 1) . "</td>";
        }

        echo "</tr>";
        $indiceFilas = 0;
        while ($indiceFilas < 20) {
            echo "<tr>";
            echo "<td class='nFila'>Fila " . ($indiceFilas + 1) . "</td>";
            $indiceColumnas = 0;
            while ($indiceColumnas < 15) {
                if ($teatro[$indiceFilas][$indiceColumnas] != null) {
                    echo "<td class='ocupado'>" . $teatro[$indiceFilas][$indiceColumnas] . "</td>";
                } else {
                    echo "<td></td>";
                }
                $indiceColumnas++;
            }
            echo '</tr>';
            $indiceFilas++;
        }
        echo '</table><br>';
        ?>
    </body>

</html>

