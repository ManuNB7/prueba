<!DOCTYPE html>
<html>
    <head>
        <title>Factorial Calculator</title>
    </head>
    <body>
        <?php
            // Incluye el archivo de funciones, lo llama y hace el factorial
            include "calculo_factorialv2.php";

            $nombre = "Manuel Nieto"; // Asigna el nombre
            $min = $_GET["min"]; //Obtiene los números introducidos en el formulario
            $max = $_GET["max"];

            // Valora que el primer número siempre sea mayor Intercambia valores si min > max
            if ($min > $max) {
                $aux = $min;
                $min = $max;
                $max = $aux;
                echo("Variables intercambiadas");
            }


            echo "<table border=1><tr><td colspan=2>FACTORIAL DEL " . $min . " AL " . $max . "</td></tr>";
            echo "<tr><td>NÚMERO</td><td>FACTORIAL</td></tr>";

            for ($i = $min; $i <= $max; $i++) {
                $factorial = calcularFactorial($i); //Llama a la función para hacer el factorial
                echo "<tr><td>" . $i . "</td><td>" . $factorial . "</td></tr>";
            }
            echo "<tr><td colspan=2>$nombre</td></tr>";
            echo "</table>";
        ?>
    </body>
</html>
