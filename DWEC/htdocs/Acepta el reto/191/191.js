// Andamio para resolver problemas de Acepta el Reto

console.log('Script cargado correctamente.')

let ficheros = ['d1.txt', 'd2.txt', 'd3.txt']

// Carga de ficheros de datos de entrada
ficheros.forEach( fichero => {
	fetch(fichero)	//Carga el ficherito
		.then(respuesta => respuesta.text())	//Saca el texto
		.then(funcion1)		//pasa el texto a funcion1
})

function funcion1(entrada){
	const listaPeceras = entrada.split("\r\n")
	console.log(listaPeceras)
}