<?php
    echo "TEXT: " . $_GET["nombre"] . "<br>";
    echo "SELECTION: " . $_GET["selection"] . "<br>";
    echo "RADIO: " . $_GET["radio"] . "<br>";
    if (isset($_GET["checkbox"])) {
    echo "CHECKBOX: " . implode(", ", $_GET["checkbox"]) . "<br>"; // Mostrar múltiples opciones si se seleccionan
    }
    if (isset($_GET["checkboxUnico"])) {
    echo "CHECKBOX UNICO: " . $_GET["checkboxUnico"] . "<br>"; // Solo lo muestra si se envía
    }
?>
