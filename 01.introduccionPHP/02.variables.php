<?php
    // Variable Numérica
    $numero = 5;
    echo "Esto es una variable número: $numero<br>";
    var_dump($numero);
    echo "<br>";
    
    // Variable texto
    $palabra = "palabra";
    echo "Esto es una variable texto $palabra<br>";
    var_dump($palabra);
    echo "<br>";

    // Variable Boleana
    $boleana = true;
    echo "Esto es una variable boleana $boleana<br>";
    var_dump($boleana);
    echo "<br>";

    // Variables de Arreglo
    $colores = array("rojo", "amarillo");
    echo "Esto es una variable arreglo $colores[1]<br>";
    var_dump($colores);
    echo "<br>";

    // Variables de Arreglo con Propiedades
    $verduras = array("verdura1" =>"lechuga","verdura2"=>"cebolla<br>");
    echo "Esto es una variable arreglo con propiedades $verduras[verdura2]";
    var_dump($verduras);
    echo "<br>";

    // Variables Objeto
    $frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
    echo "Esto es una variable objeto: $frutas->fruta1<br>";
    var_dump($frutas);
?>