<?php
	echo "<h2>Array colores</h2>"; //echo manda información al navegador
	
	$numeros = array(1, 2, 3);
	$colores = array("rojo", "verde", "azul");
	echo " <br>Mostrar posición color: <br>";
	//echo $colores; No se puede usar el echo para mostrar arrays, intenta convertirlo en un string
	echo $colores[1];

	echo " <br>Mostrar colores: <br>";
	print_r($colores); //No debe usarse en productos finales

	//Devuelve la información de una variable, usar para corregir con cualquier tipo de dato
	echo " <br>Mostrar colores con var_dump: <br>";
	var_dump($colores); //No debe usarse en productos finales

	/*COUNT
	*
	*Devuelve el número de elementos de un array o un objeto, hay que poner que llegue a uno menos para que no de key error
	*
	*/
	echo "<br>COUNT: ";
	for($i=0; $i<count($colores); $i++)
	{
		echo $colores[$i];
	}

	/*UNSET
	*
	*Quita un eelemento de un array
	*
	*/
	echo "<br>SIN UNSET: ";
	var_dump($colores);
	echo "<br>CON UNSET:";
	unset($colores[2]); // Elimina el tercer elemento (índice 2)
	var_dump($colores);

	/*FOREACH
	*
	*Sintaxis abreviada de foreach (se usa para mostrar solo el contenido del array):
	*/
	echo "<br>Sintáxis abreviada <br>";
	foreach ($colores as $dato){
		echo $dato;
		echo"<br>";
	}
	
	//Creación array asociativo
	echo "<br>Array asociativo<br>"; //echo manda información al navegador
	$datos["nombre"] = "nombre1";
	$datos ["correo"] = "correo1";
	foreach ($datos as $dato){
		echo $dato;
		echo"<br>";
	}
?>