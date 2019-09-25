<?php
    // Funciones sin parametros

    function saludo(){
        echo "Hello word !<br>";
    }

    saludo();

    // Funciones con parametros
    
    function despedida($adios){
        echo $adios."<br>";
    }

    despedida("chao !");

    // Funciones con rentorno

    function retorno($retornar)
    {
        return $retornar;
    }

    echo retorno("retornar !<br>");
?>