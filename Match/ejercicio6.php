<?php
$mes = (int)readline ("Por favor ingrese un numero para conocer que mes es: ");

$resultado = match($mes){
1 => "Enero",
2 => "Febrero",
3 => "Marzo",
4 => "Abril",
5 => "Mayo",
6 => "Junio",
7 => "Julio",
8 => "Agosto",
9 => "Septiempre",
10 => "Octubre",
11 => "Noviembre",
12 => "Diciembre",
default => "El numero no coincide con ningun mes"
};
echo $resultado;

?>