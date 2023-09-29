//Manuel Nieto Benítez

console.log('Script cargado correctamente.');

let ficheros = ['d1.csv', 'd2.csv', 'd3.csv', 'd4.csv', 'd5.csv', 'd6.csv', 'd7.csv'];

// Carga de ficheros de datos de entrada
ficheros.forEach(fichero => {
	fetch(fichero)  // Carga el fichero
		.then(respuesta => respuesta.text())  // Saca el texto
		.then(entrada => {
			funcion1(entrada, fichero);  // Pasa el texto y el nombre del archivo a funcion1
		});
});

function funcion1(entrada, nombreFichero) {
	// Divide el contenido del archivo CSV en líneas
	let lineas = entrada.split('\n');

	// Objeto para almacenar los datos agrupados por equipo
	let datosPorEquipo = {};

	// Procesar cada línea del CSV
	lineas.forEach(linea => {
		// Divide la línea en campos por coma y elimina todas las comillas dobles
		let campos = linea.split(',').map(campo => campo.replace(/"/g, "").trim());
		let equipo = campos[0]; // Muestra el nombre del equipo

		let jugadores = campos.slice(1); // Obtén los jugadores (desde el segundo campo en adelante)

		if (!datosPorEquipo[equipo]) {
			datosPorEquipo[equipo] = [];
		}
		datosPorEquipo[equipo] = datosPorEquipo[equipo].concat(jugadores);
	});

	// Validación: Verificar si el campo de equipo no está vacío
	if (lineas.length === 1 && lineas[0].trim() === "") {
		console.log("ERROR: Equipo vacío en " + nombreFichero);
		return; // Saltar el procesamiento si el equipo está vacío
	}

	// Generar el resultado deseado
	for (let equipo in datosPorEquipo) {
		let jugadores = datosPorEquipo[equipo].join(', ');
		console.log(equipo + ": " + jugadores);
	}

	// Indicar que se ha completado el procesamiento del archivo
	console.log("FIN FICHERO: " + nombreFichero + "\n\n\n");
}
