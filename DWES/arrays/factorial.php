<!DOCTYPE html>
<html>
	<head>
		<title>Prueba</title>
		<meta charset="UTF-8">
	</head>
	<body>	
		<h1>Factorial</h1>
        <?php
		 // Función "codigo"
        codigo();
		
        function codigo() {
				// Imprime una tabla HTML
				echo "<table border=1><tr><td colspan=2>FACTORIAL DEL 1 AL 10</td></tr>";
				echo "<tr><td>NÚMERO</td><td>FACTORIAL</td></tr>";

				// Calcular factoriales
				$arrayfactorial=[];
				for ($i = 1; $i <= 10; $i++) {
					$arrayfactorial[$i] = calcularFactorial($i);
				}

				//Generamos la tabla mediante un for que llama a la funcion calcularFactorial, después introduces en un array sin valores los valores de la función
				foreach($arrayfactorial as $index => $valor)
				{
					echo "<tr><td>" . $index . "</td><td>" . $valor . "</td></tr>";
				}
				echo "</table>";
			}

			// Función para calcular el factorial de un número
			function calcularFactorial($numero) {
				$factorial = 1;
				for ($i = 1; $i <= $numero; $i++) {
					$factorial *= $i;
				}
				return $factorial;
			}
        ?>
	</body>
</html>
