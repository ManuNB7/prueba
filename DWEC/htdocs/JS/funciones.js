		'use strict' //usar siempre
console.log('Cargando el script...')

//Funciones

console.log(funcion1(40,2))

//Declaración de funciones
function funcion1(param1, param2){
	let suma = param1 + param2
	return suma
}

//Llamada a la función
console.log(funcion1(40,2))
console.log(funcion1('zapato','verde'))
console.log(funcion1('zapato',2))

//Expresión de función
let miFuncion = function(arg1,arg2){return arg1+arg2}
/*if(6>7){
	let miFuncion = function(arg1,arg2){return arg1-arg2}
	console.log('bla','bla')
}*/

/*let variable = 7
variable1 = 'zapato'
variable1 = funcion1(45,9)
variable1 = miFuncion

console.log(variable1(45,9))
console.log(variable1)*/

console.log(miFuncion(44,2))

//Callback: función que pasamos a otra función cuando termine
let sumar = function (a,b) {return a+b}
let restar = function (a,b) {return a-b}

function operar(operacion, valor1,valor2){
	let resultado = operacion(valor1,valor2)
	console.log(resultado)
}

operar(sumar,6,5)
operar(restar,100,32)

//Funciones flecha
let fun3 = (p1, p2) => {
	console.log('Estoy ejecutando función flecha')
	return p1*7
}

let fun4 = () => {
	console.log('Estoy ejecutando función flecha sin parámetros ')
}

console.log(fun3(3))
console.log(fun4())

//consultaBD('2DAW', 8, (resultado) => {console.log(resultado)})