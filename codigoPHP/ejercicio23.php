<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 23</title>
    </head>
    <body>

        <?php
        require_once '../core/231018libreriaValidacion.php';
        $entradaOK = true;
        $aErrores = [
            'nombre' => '',
            'edad' => ''
        ]; // Array para mensajes de error
        $aRespuestas = [
            'nombre' => '',
            'edad' => ''
        ]; // Array para respuestas correctas
//        $nombre = isset($_REQUEST['nombre']) ? htmlspecialchars($_REQUEST['nombre']) : '';
//        $edad = isset($_REQUEST['edad']) ? (int) $_REQUEST['edad'] : '';
//        $altura = isset($_REQUEST['altura']) ? (float) $_REQUEST['altura'] : '';
//        $programar = isset($_REQUEST['programar']) ? htmlspecialchars($_REQUEST['programar']) : '';
        if (isset($_REQUEST['enviar'])) {
            //Validar entrada
            $aErrores['nombre'] = validacionFormularios::comprobarAlfaNumerico(isset($_REQUEST['nombre']), 100, 1, 0);
            $aErrores['edad'] = validacionFormularios::comprobarEntero(isset($_REQUEST['nombre']), 100, 1, 0);

            foreach ($aErrores as $campo => $error) {
                if ($error != '') {
                    $aRespuestas[$campo] = ''; // Vaciar campo con error
                } else {
                    $aRespuestas[$campo] = htmlspecialchars(($_REQUEST[$campo])); //Añadir respuesta si es correcta y no hay error
                }
            }
        } else {
            $entradaOK = false;
        }
        if ($entradaOK) {
            // Cargar respuestas limpias y saneadas
            $aRespuestas['nombre'] = htmlspecialchars(trim($_POST['nombre']));
            $aRespuestas['edad'] = (int) $_POST['edad'];

            // Mostrar datos
            echo "<h2>Resultados del cuestionario</h2>";
            echo "Nombre introducido: " . $aRespuestas['nombre'] . "<br>";
            echo "Edad introducida: " . $aRespuestas['edad'] . "<br>";
            exit;
        } else {
            ?>
            <h2>Formulario Básico</h2>
            <form action="" method="post">

                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?= $aRespuestas['nombre'] ?>">
                <span style="color:red;"><?= $aErrores['nombre'] ?></span>
                <br><br>

                <label for="edad">Edad (entero):</label>
                <input type="number" id="edad" name="edad" value="<?= $aRespuestas['edad'] ?>">
                <span style="color:red;"><?= $aErrores['edad'] ?></span>
                <br><br>

                <input type="submit" value="Enviar" name="enviar">
            </form>
            <?php
        }
        ?>
    </body>
</html>
