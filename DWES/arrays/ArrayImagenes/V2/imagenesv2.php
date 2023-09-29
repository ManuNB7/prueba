<!DOCTYPE html>
<html>
	<head>
		<title>Imágenes</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="estilos.css">
	</head>
	<body>
		<?php
			// Definir el array de imágenes
			$imagenes = [
				["nombre" => "Imagen 1", "url" => "imagenes/imagen1.jpg"],
				["nombre" => "Imagen 2", "url" => "imagenes/imagen2.jpg"],
				["nombre" => "Imagen 3", "url" => "imagenes/imagen3.jpg"],
				["nombre" => "Imagen 4", "url" => "imagenes/imagen4.jpg"],
				["nombre" => "Imagen 5", "url" => "imagenes/imagen5.jpg"],
				["nombre" => "Imagen 6", "url" => "imagenes/imagen6.jpg"],
			];

			// Variable contador para controlar el salto de línea
			$contador = 0;

			/* Recorrer el array y mostrar las imágenes y sus nombres usando la sintaxis completa de foreach
			* $indice es el nombre, como índice
			*/
			foreach ($imagenes as $indice => $valor) {
				echo '<div class="image-container">';
				echo '<img src="' . $valor['url'] . '">';
				echo '<br>';
				echo '<b>' . $indice . '</b> tiene el valor: ' . $valor['nombre'];
				echo '</div>';

				// Incrementar el contador
				$contador++;

				// Si el contador es igual a 3, agregar un salto de línea
				if ($contador == 3) {
					echo '<br>';
					$contador = 0; // Reiniciar el contador
				}
			}print_r($imagenes)
		?>
	</body>
</html>

