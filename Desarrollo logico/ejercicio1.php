<?php
$num = readline(prompt:"Por favor ingrese cuantos numeros va a trabajar  \n");

$nota = [];
$suma = 0;

for ($i=1; $i <= $num ; $i++) { 
    $nota[$i-1] = floatval (readline(prompt:"Ingrese la nota  $i \n"));
    $suma += $nota[$i-1];
}
$promedio = $suma / $num;
echo "El promedio es de  ". $promedio;