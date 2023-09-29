<?php
    //Mostrar resultados del formulario
    echo "TEXT: ".$_POST["nombre"]."<br>";
    echo "SELECT: ".$_POST["selection"]."<br>";
    echo "RADIO: ".$_POST["radio"]."<br>";
    echo "RADIO: ".$_POST["selection"]."<br>";
    if(isset($_POST["checkboxUnico"])) echo "CHECKBOX UNICO: ".$_POST["checkboxUnico"]."<br>"; //Solo lo muestra si se envía
    //Text y fecha son los únicos que no dan error, los demás sí al ser "booleanos"

    //Mostrar el checkbox que es un array con for
    for($i=0;$i<count($_POST["checkbox"]);$i++){
        echo "<br> Array checkbox: ".$_POST["checkbox"][$i]."<br>";
    }

    //Mostrar el checkbox que es un array con foreach abreviado
    echo "<br> Foreach abreviado <br>";
    foreach($_POST["checkbox"] as $valor){
        echo $valor. "<br>";
    }

    //Mostrar el checkbox que es un array con foreach completo
    echo "<br> Foreach completo <br>";
    foreach($_POST["checkbox"] as $indice => $valor){
        echo "Indice: ". $indice ." Valor: ". $valor. "<br>";
    }
    echo "<br> COMENTARIOS: ".$_POST["comentarios"]."<br>";
