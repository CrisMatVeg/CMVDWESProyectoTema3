<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 04</title>
    </head>

    <body>
        <?php
        /*  @author Cristian Mateos Vega
         *  @since 13/10/2025
         */

        date_default_timezone_set('Europe/Madrid');

        $tFecha = new DateTime();

        // Arrays con los nombres de los días y los meses
        $aDias = array("domingo", "segunda-feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sábado");
        $aMeses = array(
            "janeiro", "fevereiro", "março", "abril", "maio", "junho",
            "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"
        );

        // Obtener el nombre del día y del mes
        $diaSemanaActual = $aDias[$tFecha->format('w')];
        $mesActual = $aMeses[$tFecha->format('n') - 1];

        // Mostrar resultados
        echo $tFecha->format('d-m-Y H:i:s') . "<br>";
        echo "Año: " . $tFecha->format('Y') . "<br>";
        echo "Mes: " . $mesActual . "<br>";
        echo "Día: " . $diaSemanaActual . "<br>";
        echo $diaSemanaActual . ", " . $tFecha->format('d') . " de " . $mesActual . " del " . $tFecha->format('Y') . "<br>";
        echo "Hora: " . $tFecha->format('H:i') . "<br>";
        echo "Hora con segundos: " . $tFecha->format('H:i:s') . "<br>";
        ?>
    </body>

</html>