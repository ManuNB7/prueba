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
            $conexion = new mysqli("localhost", "root", "", 'jesuitas');

            // Obtener datos del formulario
            $nombre = $_GET['nombre'];

            // Preparar la consulta para buscar el jesuita con la firma proporcionada
            $sql = "SELECT nombre, firma FROM jesuita WHERE nombre = '$nombre'";
            $resultado = $conexion->query($sql);

            // Mostrar nombre primer jesuita
            echo $sql;
            echo "<h1>Jesuita con su nombre y firma</h1>";
            if($resultado ->num_rows > 0){ // Comprueba si devuelve 0 filas. Otra opción mirar si fetch devuelve falso.
                $fila = $resultado-> fetch_array();
                echo "<table>";
                echo "<tr><td>" . $fila["nombre"] . "</td><td>" . $fila["firma"] . "</td></tr>"; // Muestra nombre y firma
                echo "</table>";
            }
            else{
                echo "No hay jesuita";
            }

            // Cierra la conexión
            $conexion -> close();
        ?>
    </body>
</html>