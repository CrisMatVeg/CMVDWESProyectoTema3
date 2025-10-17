<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 12</title>
    </head>

    <body>
        <?php
        /*  @author Cristian Mateos Vega
         *  @since 16/10/2025
         */
        echo '<h1>$_SERVER</h1>';
        echo '<h3>Con Foreach</h3>';
        foreach ($_SERVER as $clave => $valor) {
            echo '$_SERVER[' . $clave . ']: ' . $valor;
            echo "<br>";
        }
        echo '<h3>Con print_r</h3>';
        print_r($_SERVER);
        
        echo '<h1>$_GET</h1>';
        foreach ($_GET as $clave => $valor) {
            echo "$clave: $valor<br>";
        }
        echo '<h3>Con print_r</h3>';
        print_r($_GET);
        echo '<h1>$_POST</h1>';
        foreach ($_POST as $clave => $valor) {
            echo "$clave: $valor<br>";
        }
        echo '<h3>Con print_r</h3>';
        print_r($_POST);
        echo '<h1>$_FILES</h1>';
        foreach ($_FILES as $clave => $valor) {
            echo "$clave: $valor<br>";
        }
        echo '<h3>Con print_r</h3>';
        print_r($_FILES);
        echo '<h1>$_COOKIE</h1>';
        foreach ($_COOKIE as $clave => $valor) {
            echo "$clave: $valor<br>";
        }
        echo '<h3>Con print_r</h3>';
        print_r($_COOKIE);
        echo '<h1>$_REQUEST</h1>';
        foreach ($_REQUEST as $clave => $valor) {
            echo "$clave: $valor<br>";
        }
        echo '<h3>Con print_r</h3>';
        print_r($_REQUEST);
        echo '<h1>$_ENV</h1>';
        foreach ($_ENV as $clave => $valor) {
            echo "$clave: $valor<br>";
        }
        echo '<h3>Con print_r</h3>';
        print_r($_ENV);
        ?>
    </body>

</html>