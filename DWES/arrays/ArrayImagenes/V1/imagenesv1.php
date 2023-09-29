<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="estilos.css">
	</head>
	<body>
		<div class="image-container">
			<?php
				/*
				*Define el array de imágenes, usando otro array dentro de él
				*
				*/
				$imagenArray = array(
					array("url" => "imagenes/imagen1.jpg", "nombre" => "Imagen 1"),
					array("url" => "imagenes/imagen2.jpg", "nombre" => "Imagen 2"),
					array("url" => "imagenes/imagen3.jpg", "nombre" => "Imagen 3"),
					array("url" => "imagenes/imagen4.jpg", "nombre" => "Imagen 4"),
					array("url" => "imagenes/imagen5.jpg", "nombre" => "Imagen 5"),
					array("url" => "imagenes/imagen6.jpg", "nombre" => "Imagen 6")
				);

				for ($i = 0; $i < count($imagenArray); $i++) {
					echo '<div class="image-container">';
					echo '<img src="' . $imagenArray[$i]["url"] . '">'; //El índice es numérico y la url avanza
					echo '<p>' . $imagenArray[$i]["nombre"] . '</p>'; //El índice es numérico y el nombre avanza
				}
				print_r($imagenArray)
			?>
		</div>
	</body>
</html>
