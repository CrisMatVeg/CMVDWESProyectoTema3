<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06</title>
</head>

<body>
    <?php
    $fecha = new DateTime();
    $fecha->modify('+60 days');
    echo "Fecha dentro de 60 días: " . $fecha->format('Y-m-d');
    ?>
</body>

</html>