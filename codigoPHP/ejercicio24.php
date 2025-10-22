<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 24</title>
    </head>
    <body>
        <?php
//Inicialización de variables
        require_once '../core/231018libreriaValidacion.php';
        $entradaOK = true;
        $aErrores = [
            'nombre' => '',
            'edad' => '',
            'altura' => ''
        ];
        $aRespuestas = [
            'nombre' => '',
            'edad' => '',
            'altura' => ''
        ];

// Comprobar si el formulario se ha enviado
        if (isset($_REQUEST['enviar'])) {
            if (validacionFormularios::comprobarAlfaNumerico($_REQUEST['nombre'], 100, 1, 0) != null) {
                $aErrores['nombre'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['nombre'], 100, 1, 0);
                $entradaOK = false;
            } else {
                $aRespuestas['nombre'] = htmlspecialchars($_REQUEST['nombre']);
            }

            // Validar edad (entero)
            if (validacionFormularios::comprobarEntero($_REQUEST['edad'], 100, 5, 0) != null) {
                $aErrores['edad'] = validacionFormularios::comprobarEntero($_REQUEST['edad'], 100, 5, 0);
                $entradaOK = false;
            } else {
                $aRespuestas['edad'] = (int) $_REQUEST['edad'];
            }

            // Validar altura (float)
            if (validacionFormularios::comprobarFloat($_REQUEST['altura'], 100, 1, 0) != null) {
                $aErrores['altura'] = validacionFormularios::comprobarFloat($_REQUEST['altura'], 100, 1, 0);
                $entradaOK = false;
            } else {
                $aRespuestas['altura'] = (float) $_REQUEST['altura'];
            }
        } else {
            // Formulario no enviado aún
            $entradaOK = false;
        }

// Tratamiento del formulario
        if ($entradaOK) {
            // Aquí iría el procesamiento con datos válidos
            echo "<h2>Formulario enviado correctamente</h2>";
            echo "<p>String: " . htmlspecialchars($aRespuestas['nombre']) . "</p>";
            echo "<p>Entero: " . $aRespuestas['edad'] . "</p>";
            echo "<p>Float: " . $aRespuestas['altura'] . "</p>";
        } else {
            // Mostrar formulario y mensajes de error (si los hay)
            ?>
            <form action="" method="post">
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" id="nombre" value="<?php echo ($aErrores['nombre'] == '') ? $aRespuestas['nombre'] : ''; ?>">
                <span style="color:red;"><?php echo $aErrores['nombre']; ?></span><br><br>

                <label for="edad">Edad:</label><br>
                <input type="number" name="edad" id="edad" value="<?php echo ($aErrores['edad'] == '') ? $aRespuestas['edad'] : ''; ?>">
                <span style="color:red;"><?php echo $aErrores['edad']; ?></span><br><br>

                <label for="altura">Altura:</label><br>
                <input type="float" name="altura" id="altura" value="<?php echo ($aErrores['altura'] == '') ? $aRespuestas['altura'] : ''; ?>">
                <span style="color:red;"><?php echo $aErrores['altura']; ?></span><br><br>

                <input type="submit" name="enviar" value="Enviar">
            </form>
            <?php
        }
        ?>
    </body>
</html>
