<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 03</title>
    </head>

    <body>
        <?php
        /*  @author Cristian Mateos Vega
         *  @since 13/10/2025
         */

        setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish', 'es');
        date_default_timezone_set('Europe/Lisbon');
        $tFecha = new DateTime();
        $fX = $tFecha;
        echo $fX->format('d-m-Y h:i:s') . "<br>";
        echo $fX->format('Y') . "<br>";
        echo strftime('%B', $tFecha->getTimestamp()) . "<br>";
        echo strftime('%A', $tFecha->getTimestamp()) . "<br>";
        echo strftime('%d de %B del %Y', $tFecha->getTimestamp()) . "<br>";
        echo $fX->format('h:i') . "<br>";
        echo $fX->format('h:i:s') . "<br>";
        ?>
    </body>

</html>