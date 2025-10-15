<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>

<body>
    <?php
        $vString = "Cadena";
        $vInt = 42;
        $vFloat = 3.1416;
        $vBool = true;

        echo "String con echo: $vString\n";
        print "Integer con print: $vInt\n";
        printf("Float con printf: $vFloat\n");
        print_r($vBool);
        echo "\n";
        var_dump($vString, $vInt, $vFloat, $vBool);
    ?>
</body>

</html>