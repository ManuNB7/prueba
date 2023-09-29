<!DOCTYPE html>
<html>
	<head>
		<title>Prueba</title>
		<meta charset="UTF-8">
	</head>
	<body>	
		<h1>Formulario</h1>
		<form>
			<label for="min">Mínimo: <input type="text" name="min"></label>
			<label for="max">Máximo: <input type="text" name="max"></label>
			<br>
			<input type="submit">
		</form>
        <?php
        if (isset($_GET["min"]) && isset($_GET["max"])) {
            // Llama a la función "codigo" si se han dado valores para "min" y "max"
            codigo();
        }

        // Función para calcular el factorial de un número
        function calcularFactorial($numero) {
            $factorial = 1;
            for ($i = 1; $i <= $numero; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        }

        // Función "codigo" que se llama si se proporcionan valores para "min" y "max"
        function codigo() {
            $nombre = "Manuel Nieto"; // Asigna el nombre

            $min = $_GET["min"];
            $max = $_GET["max"];

            // Intercambia valores si min > max
            if ($min > $max) {
                $aux = $min;
                $min = $max;
                $max = $aux;
                echo("Variables intercambiadas");
            }

            // Imprime una tabla HTML
            echo "<table border=1><tr><td colspan=2>FACTORIAL DEL " . $min . " AL " . $max . "</td></tr>";
            echo "<tr><td>NÚMERO</td><td>FACTORIAL</td></tr>";

            // Calcular factoriales
            for ($i = $min; $i <= $max; $i++) {
                $factorial = calcularFactorial($i);
                echo "<tr><td>" . $i . "</td><td>" . $factorial . "</td></tr>";
            }

            // Muestra el nombre
            echo "<tr><td colspan=2>$nombre</td></tr>";
            echo "</table>";
        }
        ?>
	</body>
</html>
