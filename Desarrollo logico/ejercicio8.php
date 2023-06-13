<?php

$inicio = intval(readline("Ingrese el inicio del rango: "));
$fin = intval(readline("Ingrese el fin del rango: "));

for ($num = $inicio; $num <= $fin; $num++) {
    $divisores = array();

    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $divisores[] = $i;
        }
    }

    $sumaDivisores = array_sum($divisores);

    if ($sumaDivisores == $num) {
        echo "$num es un número perfecto.\n";
    }
}
    echo "no hay numeros perfectos.";
?>
