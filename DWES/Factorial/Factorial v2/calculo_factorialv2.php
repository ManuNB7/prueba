<?php
    // funciones.php

    // Función para calcular el factorial de un número
    function calcularFactorial($numero) {
        $factorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;
        }
        return $factorial; 
    }
?>
