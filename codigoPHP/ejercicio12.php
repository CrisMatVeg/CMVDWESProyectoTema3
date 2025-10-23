<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 12</title>
        <style>
            table {
                border-collapse: collapse;
                margin: 10px 0 30px 0;
                width: 70%;
                font-family: Arial, sans-serif;
            }

            th, td {
                border: 1px solid #999;
                padding: 6px 10px;
                text-align: left;
            }

            th {
                background-color: #787cb4;
                width: 35%;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            pre {
                background-color: #f3f3f3;
                padding: 8px;
                border: 1px solid #ccc;
                overflow-x: auto;
            }
        </style>
    </head>

    <body>
        <?php
        /*  @author Cristian Mateos Vega
         *  @since 16/10/2025
         */
        echo '<h3>$_SERVER Con print_r</h3>';
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";
        echo '<h3>$_GET Con print_r</h3>';
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
        echo '<h3>$_POST Con print_r</h3>';
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        echo '<h3>$_FILES Con print_r</h3>';
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        echo '<h3>$_COOKIE Con print_r</h3>';
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";
        echo '<h3>$_REQUEST Con print_r</h3>';
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
        echo '<h3>$_ENV Con print_r</h3>';
        echo "<pre>";
        print_r($_ENV);
        echo "</pre>";

        echo '<table><tr><th>Variable $_SERVER</th><th>Valor</th></tr>';
        foreach ($_SERVER as $clave => $valor) {
            echo "<tr><th>$$clave</th><td>" . $valor . "</td></tr>";
        }
        echo '<h1>$_SERVER</h1>';

        echo '<table><tr><th>Variable $_GET</th><th>Valor</th></tr>';
        foreach ($_GET as $clave => $valor) {
            echo "<tr><th>$$clave</th><td>" . $valor . "</td></tr>";
        }
        echo '<h1>$_GET</h1>';

        echo '<table><tr><th>Variable $_POST</th><th>Valor</th></tr>';
        foreach ($_POST as $clave => $valor) {
            echo "<tr><th>$$clave</th><td>" . $valor . "</td></tr>";
        }
        echo '<h1>$_POST</h1>';

        echo '<table><tr><th>Variable $_FILES</th><th>Valor</th></tr>';
        foreach ($_FILES as $clave => $valor) {
            echo "<tr><th>$$clave</th><td>" . $valor . "</td></tr>";
        }
        echo '<h1>$_FILES</h1>';

        echo '<table><tr><th>Variable $_COOKIE</th><th>Valor</th></tr>';
        foreach ($_COOKIE as $clave => $valor) {
            echo "<tr><th>$$clave</th><td>" . $valor . "</td></tr>";
        }
        echo '<h1>$_COOKIE</h1>';

        echo '<table><tr><th>Variable $_REQUEST</th><th>Valor</th></tr>';
        foreach ($_REQUEST as $clave => $valor) {
            echo "<tr><th>$$clave</th><td>" . $valor . "</td></tr>";
        }
        echo '<h1>$_REQUEST</h1>';

        echo '<table><tr><th>Variable $_ENV</th><th>Valor</th></tr>';
        foreach ($_ENV as $clave => $valor) {
            echo "<tr><th>$$clave</th><td>" . $valor . "</td></tr>";
        }
        echo '<h1>$_ENV</h1>';
        ?>
    </body>

</html>