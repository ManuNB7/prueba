<?php
    $nombre = "Manuel Nieto"; // Asigna el nombre
    $n1 = 2;
    $n2 = 9;

    //Mediante las variables asignamos de forma manual los números para hacer el factorial, en este caso no hay comprobación de cuál es mayor
    echo "<table border=1><tr><td colspan=2>FACTORIAL DEL ".$n1." AL ".$n2."</td></tr>";
    echo "<tr><td>NÚMERO</td><td>FACTORIAL</td></tr>";
    
    //Calcula el factorial e imprime las celdas
    $factorial = 1;
    for ($i = $n1; $i <= $n2; $i++) {
        $factorial=calcularFactorial($i);
        echo "<tr><td>" .$i. "</td><td>" .$factorial. "</td></tr>";
    }
    echo "<tr><td colspan=2>$nombre</td></tr>";
    echo "</table>";

    // Función para calcular el factorial de un número
    function calcularFactorial($numero) {
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }
    return $factorial;
    }
?>