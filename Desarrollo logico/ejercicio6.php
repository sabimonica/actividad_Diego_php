<?php

$numeros = readline("Ingrese una serie de números para separados por espacios: ");
$numeros = explode(" ", $numeros);
$inverso = array();
$cantidadNumeros = count($numeros);

for ($i = $cantidadNumeros - 1; $i >= 0; $i--) {
    $inverso[] = $numeros[$i];
}
echo "Números invertidos: " . implode(" ", $inverso);

?>
