<?php

$numero = intval(readline("Ingrese un número para hallar el factorial: "));

if ($numero < 0) {
    echo "El número debe ser mayor o igual a cero.";
} else {
    
    $factorial = 1;
    for ($i = 2; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    echo " El factorial de ". $numero . " es ". $factorial;
}
?>

