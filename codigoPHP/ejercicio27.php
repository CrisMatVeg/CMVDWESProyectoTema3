<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 24</title>
        <style>
            input:disabled{
                background-color: lightgrey;
            }
            * {
                font-family: sans-serif;
            }

            body {
                justify-content: center;
                justify-items: center;
            }

            body img {
                text-align: center;
            }

            .imagen, #contenedorenviar {
                background-color: transparent;
                text-align: center;
            }

            div {
                padding: 20px;
                width: auto;
                height: auto;
                background-color: lightskyblue;
                border-radius: 20px;
                margin: 20px;
            }

            #enviar {
                border-radius: 20px;
                height: 70px;
                width: 140px;
                background-color: lightskyblue;
                border: 3px solid rgb(55, 55, 95);
                font-weight: bold;
            }

            label {
                font-weight: bold;
            }

            textarea {
                width: 1300px;
                height: 100px;
            }

            input {
                height: 20px;
                border-radius: 3px;
                border-style: none;
            }
        </style>
    </head>
    <body>
        <?php
        /*  @author Cristian Mateos Vega
         *  @since 22/10/2025
         */

        require_once '../core/231018libreriaValidacion.php';
//Inicialización de variables
        $entradaOK = true;
        $aErrores = [
            'nombre' => '',
            'fecha' => '',
            'estado' => '',
            'nota' => '',
            'vacaciones' => '',
            'descripcion' => ''
        ];
        $aRespuestas = [
            'nombre' => '',
            'fecha' => '',
            'estado' => '',
            'nota' => '',
            'vacaciones' => '',
            'descripcion' => ''
        ];
        date_default_timezone_set('Europe/Madrid');

        $fechaActual = new DateTime();

        // Arrays con los nombres de los días y los meses
        $aDias = array("domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado");
        $aMeses = array(
            "enero", "febrero", "marzo", "abril", "mayo", "junio",
            "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
        );

        // Obtener el nombre del día y del mes
        $diaSemanaActual = $aDias[$fechaActual->format('w')];
        $mesActual = $aMeses[$fechaActual->format('n') - 1];
        $edad=null;
        
        // Comprobar si el formulario se ha enviado
        if (isset($_REQUEST['enviar'])) {
            $aErrores['nombre'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['nombre'], 100, 1, 1);
            $aErrores['fecha'] = validacionFormularios::validarFecha($_REQUEST['fecha'], '01/01/2025', '01/01/1900', 1);
            $aErrores['estado'] = validacionFormularios::comprobarNoVacio($_REQUEST['estado']);
            $aErrores['nota'] = validacionFormularios::comprobarEntero($_REQUEST['nota'], 10, 0, 1);
            $aErrores['vacaciones'] = validacionFormularios::comprobarNoVacio($_REQUEST['vacaciones']);
            $aErrores['descripcion'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['descripcion'], 1000, 1, 1);

            foreach ($aErrores as $campo => $valor) {
                if ($valor != null) { // Si ha habido algun error $entradaOK es falso.
                    $entradaOK = false;
                } else {
                    $aRespuestas[$campo] = $_REQUEST[$campo]; // Guardamos el dato correcto en el array de Respuestas.
                }
            }
        } else {
            // Formulario no enviado aún
            $entradaOK = false;
        }

// Tratamiento del formulario
        if ($entradaOK) {
            $fechaIntroducida= new DateTime($aRespuestas['fecha']);
            $edad=$fechaActual->diff($fechaIntroducida);
            //Mostrar respuestas con datos (correctos) introducidos
            ?>
            <div class="imagen">
                <h1>RESULTADOS DE LA ENCUESTA – INFORME DE SATISFACCIÓN PERSONAL</h1>
                <img src="https://em-content.zobj.net/source/microsoft-teams/400/thumbs-up_1f44d.png" alt="emoji pensativo">
            </div>
            <?php
            echo"<div>";
            echo "<p><strong>Hoy: </strong>" . $diaSemanaActual . ", " . $fechaActual->format('d') . " de " . $mesActual . " del " . $fechaActual->format('Y') . "</p>";
            echo "<p>D. <strong>" . $aRespuestas['nombre'] . "</strong>, nacido hace <strong>$edad->y</strong> años, se siente <strong>" . $aRespuestas['estado'] . "</strong>.</p>";
            echo "<p>Valora su curso actual con <strong>" . $aRespuestas['nota'] . "</strong> sobre 10.</p>";
            echo "<p>Estas navidades las dedicará a <strong>" . $aRespuestas['vacaciones'] . "</strong>.</p>";
            echo "<p>Y además, opina que: ".$aRespuestas['descripcion']."</p>";
            echo"</div>";
        } else {
            // Mostrar formulario y mensajes de error (si los hay)
            ?>
            <div class="imagen">
                <h2>ENCUESTA INDIVIDUAL DE VALORACIÓN – EJERCICIO 27</h2>
                <img src="https://em-content.zobj.net/source/microsoft-teams/400/thinking-face_1f914.png" alt="emoji pensativo">
            </div>

            <form>
                <div>
                    <label>Nombre y apellidos del alumno: (*)</label><br><br>
                    <input type="text" name="nombre" class="required" value="<?php echo (empty($aErrores['nombre'])) ? $aRespuestas['nombre'] : ''; ?>">
                    <span style="color:red;"><?php echo $aErrores['nombre']; ?></span><br><br>
                </div>

                <div>
                    <label>Fecha de nacimiento: (*)</label><br><br>
                    <input type="date" name="fecha" class="required" value="<?php echo (empty($aErrores['fecha'])) ? $aRespuestas['fecha'] : ''; ?>">
                    <span style="color:red;"><?php echo $aErrores['fecha']; ?></span><br><br>
                </div>

                <div>
                    <label>¿Cómo te sientes hoy? (* y una única selección permitida)</label>
                    <div class="radio-group">
                        <label>MUY MAL <input type="radio" name="estado" value="muy mal" <?php echo ($aRespuestas['estado'] === 'muy mal') ? 'checked' : ''; ?>></label><br>
                        <label>MAL <input type="radio" name="estado" value="mal" <?php echo ($aRespuestas['estado'] === 'mal') ? 'checked' : ''; ?>></label><br>
                        <label>REGULAR <input type="radio" name="estado" value="regular" <?php echo ($aRespuestas['estado'] === 'regular') ? 'checked' : ''; ?>></label><br>
                        <label>BIEN <input type="radio" name="estado" value="bien" <?php echo ($aRespuestas['estado'] === 'bien') ? 'checked' : ''; ?>></label><br>
                        <label>MUY BIEN <input type="radio" name="estado" value="muy bien" <?php echo ($aRespuestas['estado'] === 'muy bien') ? 'checked' : ''; ?>></label>
                    </div>
                </div>

                <div>
                    <label>¿Cómo va el curso? [0-10]: (* y entero)</label><br><br>
                    <input type="number" name="nota" class="required" value="<?php echo (empty($aErrores['nota'])) ? $aRespuestas['nota'] : ''; ?>">
                    <span style="color:red;"><?php echo $aErrores['nota']; ?></span><br><br>
                </div>

                <div>
                    <label>¿Cómo se presentan las vacaciones de navidad? (* Cuadro de lista con los siguientes valores posibles:
                        Ni idea, Con la familia, De fiesta, Trabajando, Estudiando DWES)</label><br><br>
                    <select name="vacaciones">
                        <option value="ni idea" <?php echo ($aRespuestas['vacaciones'] === 'ni idea') ? 'selected' : ''; ?>>Ni idea</option>
                        <option value="estar con la familia" <?php echo ($aRespuestas['vacaciones'] === 'estar con la familia') ? 'selected' : ''; ?>>Con la familia</option>
                        <option value="salir de fiesta" <?php echo ($aRespuestas['vacaciones'] === 'salir de fiesta') ? 'selected' : ''; ?>>De fiesta</option>
                        <option value="trabajar" <?php echo ($aRespuestas['vacaciones'] === 'trabajar') ? 'selected' : ''; ?>>Trabajando</option>
                        <option value="estudiar DWES" <?php echo ($aRespuestas['vacaciones'] === 'estudiar DWES') ? 'selected' : ''; ?>>Estudiando DWES</option>
                    </select>
                </div>

                <div>
                    <label>Describe brevemente tu estado de ánimo: (* y área de texto para varias líneas)</label><br><br>
                    <textarea name="descripcion" class="required"><?php echo (empty($aErrores['descripcion'])) ? $aRespuestas['descripcion'] : ''; ?></textarea>
                    <span style="color:red;"><?php echo $aErrores['descripcion']; ?></span><br><br>
                </div>

                <div id="contenedorenviar">
                    <input type="submit" name="enviar" value="ENVIAR" id="enviar">
                </div>
            </form>
            <?php
        }
        ?>
    </body>
</html>
