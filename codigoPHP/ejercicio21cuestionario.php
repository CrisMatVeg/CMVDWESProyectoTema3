<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 21 Cuestionario</title>
    </head>
<body>
    <h2>Formulario de Tipos Básicos</h2>
    <form action="ejercicio21tratamiento.php" method="post">
        <!-- String -->
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <!-- Int -->
        <label for="edad">Edad (entero):</label><br>
        <input type="number" id="edad" name="edad"><br><br>

        <!-- Float -->
        <label for="altura">Altura (decimal):</label><br>
        <input type="float" id="altura" name="altura"><br><br>

        <!-- Boolean -->
        <label>¿Te gusta programar?</label><br>
        <input type="radio" id="si" name="programar" value="1" required>
        <label for="si">Sí</label><br>
        <input type="radio" id="no" name="programar" value="0">
        <label for="no">No</label><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
