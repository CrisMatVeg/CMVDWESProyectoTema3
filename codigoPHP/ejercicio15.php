<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 15</title>
    </head>

    <body>
        <?php
        /*  @author Cristian Mateos Vega
         *  @since 17/10/2025
         */
        $aSueldosSemanales=array("lunes"=>100,"martes"=>34,"miercoles"=>56,"jueves"=>78,"viernes"=>67,"sabado"=>99,"domingo"=>82);
        $sumaDeSueldos=0;
        foreach ($aSueldosSemanales as $diaSemana => $sueldo) {
            $sumaDeSueldos+=$sueldo;
        }
        echo "Sueldo total semanal: ".$sumaDeSueldos;
        ?>
    </body>

</html>

