<?php

$palabra = readline("Ingrese una palabra para verificar si es polindromo: ");

$palabra = strtolower(str_replace(' ', '', $palabra));

$longitud = strlen($palabra);

$Palindromo = true;

for ($i = 0; $i < $longitud / 2; $i++) {
    if ($palabra[$i] !== $palabra[$longitud - $i - 1]) {
        $Palindromo = false;
        break;
    }
}
if ($Palindromo) {
    echo "La palabra '$palabra' es un palindromo.";
} else {
    echo "La palabra '$palabra' no es un palindromo.";
}
?>
