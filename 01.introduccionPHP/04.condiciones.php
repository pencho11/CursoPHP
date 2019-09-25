<?php
    // Condiciones
    $a = 15;
    $b = 10;

    if($a > $b ){
        echo "a es mayor que b";
    }
    elseif($a == $b ){
        echo "a es igual que b";
    }
    else {
        echo "b es mayor que a";
    }

    echo "<br>";
    // Suiches
    $dia = "lunes";

    switch($dia){
        case 'sabado':
        echo "Voy a estudiar";
        break;

        case 'viernes':
        echo "Voy a la fiesta";
        break;

        case 'domingo':
        echo "Voy a descansar";
        break;

        default: echo "voy a la universidad";
    }

    echo "<br>";
    // Ciclo while

    $n = 1;

    while($n < 5 ){
        echo $n." ";
        $n++;
    }

    echo "<br>";
    // Ciclo do while
    
    $p=1;

    do{
        echo $p." ";
        $p++;
    }while($p < 5);

    echo "<br>";
    // Ciclo for

    for($i = 1; $i <= 5; $i++){
        echo $i."";
    }
?>