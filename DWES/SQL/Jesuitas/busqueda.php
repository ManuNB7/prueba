<html>
    <head>
        <title>Listado de Jesuitas</title>
        <style>
            body {
                font-family: Arial;
                background-color: antiquewhite;
            }

            table {
                width: 1250px;
                border-collapse: collapse;
                margin-top: 20px;
                background-color: #cccccc;
            }

            th, td {
                border: 2px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #f5f5f5;
            }
        </style>
    </head>
    <body>
        <?php
            // Abrir conexión con la base de datos
            $conexion = mysqli_connect("localhost", "root", "", 'jesuitas');

            // Obtener datos del formulario
            $id = ($_POST["id"]);
            $nombre =($_POST["nombre"]);
            $firma = ($_POST["firma"]);

            // Preparar la consulta para insertar los datos
            $sql_insert = "INSERT INTO jesuita (idJesuita, nombre, firma) VALUES ('$id','$nombre', '$firma')";
            $resultado_insert = mysqli_query($conexion, $sql_insert); // Ejecuta la consulta de inserción

            // Le damos valor a la variable con la consulta a realizar
            $sql_select = "SELECT nombre, firma FROM jesuita";
            $resultado_select = mysqli_query($conexion, $sql_select); // Ejecuta la consulta de selección

            // Mostrar nombre primer jesuita
            echo "<h1>Listado de jesuitas con sus nombres y firmas</h1>";

            // Mostrar error si está vacío
            if ($resultado_select === false) {
                echo "Error en la consulta: " . mysqli_error($conexion);
            } else {
                echo "<table>"; // Agregado: comienza la tabla
                while ($fila = mysqli_fetch_array($resultado_select)) {
                    echo "<tr><td>(Nombre) = " . $fila["nombre"] . "</td><td>(Firma) = " . $fila["firma"] . "</td></tr>"; // Muestra nombre y firma de cada
                }
                echo "</table>"; // Agregado: cierra la tabla
            }

            // Cierra la conexión
            mysqli_close($conexion);
        ?>
    </body>
</html>