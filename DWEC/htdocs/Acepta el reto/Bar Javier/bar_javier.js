		'use strict' //usar siempre
console.log('Cargando el script...')

/* ANÁLISIS
* Datos de Entrada: [number]
* Datos de Salida: 
*					diaMax string
*					diaMin string
* 					supera boolean
*
*/

//let respuesta = prompt('Danos una señal')


//Cargar ficheros
let ficheros = ['d1.txt', 'd2.txt', 'd3.txt'] 
ficheros.forEach(f => {cargarFicheros(f)})

function cargarFicheros(fichero){
	fetch(fichero)	//Carga el ficherito
	.then(respuesta=> respuesta.text())		//Saca el texto
	.then(funcion1)			//Pasa el texto a funcion1
}
///////////////////////////////////////
	
function funcion1(entrada){
	const listaVentas = entrada.split("\r\n")
	let ventas = []
	for(let i=0; i<listaVentas.length; i++){
		if(listaVentas[i]=== '-1')
			break
		ventas[i] = +listaVentas[i]
	}

	let min = ventas[0]
	let max = ventas[0]	
	let supera = true
	
	let media = (ventas[0]+ventas[1]+ventas[2]+ventas[3]+ventas[4]+ventas[5])/6

	if (ventas[5]>media){
		 supera = true
	}
	else{
		supera = false
	}
 
	let j=1
	let posMin=0
	let posMax=0
	while(j<listaVentas.lenght)
	{
		if(min>listaVentas)
			min = ventas[j]
		if (max >listaVentas)
			max = ventas[j]
		j++
	}
	
	console.log(ventas)
	
	let diaMax = 'DOMINGO'
	let diaMin = 'DOMINGO'
	let superaTexto = 'NO'
	if(supera)
			superaTexto = 'SÍ'

	console.log(diaMax,diaMin,superaTexto) //console.log(`${diaMax} ${diaMin} ${superaTexto}`)
}



