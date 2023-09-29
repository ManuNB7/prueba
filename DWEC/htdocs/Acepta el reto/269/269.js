// Andamio para resolver problemas de Acepta el Reto

console.log('Script cargado correctamente.')

let ficheros = ['d1.txt']

// Carga de ficheros de datos de entrada
ficheros.forEach( fichero => {
	fetch(fichero)	//Carga el ficherito
		.then(respuesta => respuesta.text())	//Saca el texto
		.then(funcion1)		//pasa el texto a funcion1
})

function funcion1(entrada){
	console.log(entrada)

	entrada = entrada.split("\r\n")
	console.log(entrada)
	let numCasos
}
