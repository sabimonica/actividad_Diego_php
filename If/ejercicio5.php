<?php
$num1 = readline("Por favor ingrese un numero: ");
$num2 = readline("Por favor ingrese un numero: ");

if ($num1 > 10 && $num2 > 10) {
    echo "Ambos numeros son mayores que 10";
}elseif ($num1 > 10 && $num2 < 10) {
    echo "Solo uno de los numeros es mayor a 10";
}elseif ($num1 < 10 && $num2 > 10) {
    echo "Solo uno de los numeros es mayor a 10";
}elseif ($num1 < 10 && $num2 < 10) {
    echo "Ninguno de los numeros es mayor a 10";
}elseif ($num1 == 10 && $num2 == 10) {
    echo "ambos numeros son iguales a 10";
}
?>