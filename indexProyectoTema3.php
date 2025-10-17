<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Proyecto Tema 3</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <style>

            @font-face {
                font-family: 'MiFuente';
                src: url('./webroot/fonts/Audiowide-Regular.ttf') format('woff2'),
                    url('./webroot/fonts/Audiowide-Regular.ttf') format('woff');
                font-weight: normal;
                font-style: normal;
            }

            * {
                font-family: "MiFuente";
                font-weight: 200;
            }

            body {
                margin: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
                overflow-y: auto;
            }

            #videofondo {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                z-index: -1;
            }

            span {
                color: black;
                display: block;
                padding-top: 15px;
            }

            a {
                text-decoration: underline;
                color: black;
            }

            #iconos {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            #iconos * {
                margin: 10px;
            }

            header {
                position: fixed;
                display: flex;
                justify-content: space-around;
                align-items: center;
                top: 0;
                left: 0;
                right: 0;
                background: #52213d60;
                color: #fff;
                text-align: center;
                padding: 15px;
                z-index: 1000;
                height: 60px;
                backdrop-filter: blur(7px);
                box-shadow: 0px 0px 30px rgba(227,228,237,0.37);
                flex-shrink: 0;

            }

            footer {
                position: relative;
                display: flex;
                justify-content: space-between;
                align-items: center;
                bottom: 0;
                left: 0;
                right: 0;
                background: #52213d60;
                color: #fff;
                text-align: center;
                padding: 15px;
                z-index: 1000;
                backdrop-filter: blur(7px);
                box-shadow: 0px 0px 20px rgba(227,228,237,0.37);
                flex-shrink: 0;

            }

            main {
                flex: 1;
                margin-top: 100px;
                margin-bottom: 20px;
                display: grid;
                grid-template-columns: 1fr 1fr;
                column-gap: 10px;
                row-gap: 10px;
                height: 100vh;
                justify-items: center;
                align-content: center;
                align-items: start;
                justify-content: center;
                overflow: hidden;
                box-sizing: border-box;
            }

            table{
                position: relative;
                overflow: hidden;
                border-radius: 7px;
                transition: transform 0.3s ease;
                transform-origin: center;
                background-size: cover;
                background-position: center;
                display: flex;
                justify-content: center;
                align-items: center;
                color: black;
                font-weight: bold;
                font-size: 1.2rem;
                z-index: 0;
                padding: 15px;
                width: 100vw;
                height: 100%;
                background: white;
            }

            td{
                border: 1px solid black;
                height: 50px;
                padding: 10px;
            }

            tr td:nth-child(3){
                cursor:pointer;
            }

            tr td:nth-child(4){
                cursor:pointer;
            }

            .overlay {
                position: absolute;
                inset: 0;
                opacity: 0;
                transition: opacity 0.3s ease;
                border-radius: 7px;
                z-index: 1;
                background: #111111a9;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
            }

            .card span {
                position: relative;
                z-index: 2;
            }

            a span:hover {
                transform: scale(1.05);
            }

            .card:hover {
                box-shadow: 0 0 20px rgba(183, 0, 255, 0.5);
            }


            .card:hover .overlay {
                opacity: 1;
            }

            .card::before {
                content: '';
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                transform: rotate(-45deg);
                transition: all 0.5s ease;
                opacity: 0;
            }

            .card::before {
                background: linear-gradient(0deg,
                    transparent,
                    transparent 30%,
                    rgba(204, 0, 255, 0.3));
            }

            .card:hover::before {
                opacity: 1;
                transform: rotate(-45deg) translateY(100%);
            }
        </style>
    </head>

    <body>
        <video autoplay muted loop id="videofondo">
            <source src="./webroot/images/videofondo.mp4" type="video/mp4">
        </video>
        <header>
            <h2>DAW2</h2>
            <h1>Proyecto Tema 3</h1>
            <h2>25/26</h2>
        </header>

        <main>
            <table>
                <tr>
                    <td class="numero">0</td>
                    <td class="enunciado">Hola mundo y phpinfo()</td>
                    <td>
                        <a href="./codigoPHP/ejercicio00.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </td>
                    <td>
                        <a href="./mostrarcodigo/mostrarcodigo00.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="numero">1</td>
                    <td class="enunciado">Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r,
                        var_dump).</td>
                    <td><a href="./codigoPHP/ejercicio01.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo01.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">2</td>
                    <td class="enunciado">Inicializar y mostrar una variable heredoc.</td>
                    <td><a href="./codigoPHP/ejercicio02.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo02.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">3</td>
                    <td class="enunciado">Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)</td>
                    <td><a href="./codigoPHP/ejercicio03.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo03.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">4</td>
                    <td class="enunciado">Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués</td>
                    <td><a href="./codigoPHP/ejercicio04.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo04.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">5</td>
                    <td class="enunciado">Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)
                    </td>
                    <td><a href="./codigoPHP/ejercicio05.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo05.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">6</td>
                    <td class="enunciado">Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</td>
                    <td><a href="./codigoPHP/ejercicio06.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo06.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">7</td>
                    <td class="enunciado">Mostrar el nombre del fichero que se está ejecutando.
                    </td>
                    <td><a href="./codigoPHP/ejercicio07.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo07.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">8</td>
                    <td class="enunciado">Mostrar la dirección IP del equipo desde el que estás accediendo.</td>
                    <td><a href="./codigoPHP/ejercicio08.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo08.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">9</td>
                    <td class="enunciado">Mostrar el path donde se encuentra el fichero que se está ejecutando.</td>
                    <td><a href="./codigoPHP/ejercicio09.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo09.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">10</td>
                    <td class="enunciado">Mostrar el contenido del fichero que se está ejecutando.
                    </td>
                    <td><a href="./codigoPHP/ejercicio10.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo10.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">11</td>
                    <td class="enunciado">
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="numero">12</td>
                    <td class="enunciado">Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
                    </td>
                    <td><a href="./codigoPHP/ejercicio12.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo12.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">13</td>
                    <td class="enunciado">
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="numero">14</td>
                    <td class="enunciado">
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="numero">15</td>
                    <td class="enunciado">Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la
semana.
                    </td>
                    <td><a href="./codigoPHP/ejercicio15.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo15.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">16</td>
                    <td class="enunciado">Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
                    </td>
                    <td><a href="./codigoPHP/ejercicio16.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo16.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">17</td>
                    <td class="enunciado">Inicializar un array bidimensional y recorrerlo de distintas formas (Teatro).
                    </td>
                    <td><a href="./codigoPHP/ejercicio17.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo17.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
                <tr>
                    <td class="numero">18</td>
                    <td class="enunciado">Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
                    </td>
                    <td><a href="./codigoPHP/ejercicio18.php" target="_blank">
                            <i class="fa-solid fa-play"></i>
                        </a></td>
                    <td><a href="./mostrarcodigo/mostrarcodigo18.php" target="_blank">
                            <i class="fa-solid fa-code"></i>
                        </a></td>
                </tr>
            </table>
        </main>

        <footer>
            <p>© 2025-26 IES Los Sauces. Todos los derechos reservados.</p>
            <div id="iconos">
                <a href="https://github.com/CrisMatVeg" target="_blank" title="Github"><i
                        class="fa-brands fa-github fa-2xl"></i></a>
                <a href="../CMVDWESProyectoDWES/indexProyectoDWES.php" title="Inicio"><i class="fa-solid fa-house fa-xl"></i></a>
            </div>
        </footer>
    </body>

</html>
