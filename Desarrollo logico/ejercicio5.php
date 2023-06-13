<?php
$numero = intval(readline("Ingrese un número para verificar si es un numero primo: "));

if ($numero <= 1) {
    echo "El número debe ser mayor que 1.";
} else {
    $Primo = true;

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $Primo = false;
            break;
        }
    }
    if ($Primo) {
        echo "El número $numero es primo.";
    } else {
        echo "El número $numero no es primo.";
    }
}
?>
