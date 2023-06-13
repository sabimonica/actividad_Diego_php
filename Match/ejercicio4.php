<?php
$fecha = readline ("Ingrese una fecha en formato día-mes-año(recuerde que debe omitir el 0 de no ser necesario): ");
$contifecha = explode('-', $fecha);
$mes =($contifecha[1]);
      
$resultado = match ($mes) {
"1" => '¡Enero Feliz año nuevo!',
"2" => '¡Febrero Feliz mes de San Valentín!',
"3" => '¡Marzo Feliz mes de la primavera!',
"4" => '¡Abril Feliz mes de Pascua!',
"5" => '¡Mayo Feliz mes de las flores!',
"6" => '¡Junio Feliz mes de los días más largos!',
"7" => '¡Julio Feliz mes de las vacaciones!',
"8" => '¡Agosto Feliz mes de la buena suerte!',
"9" => '¡Septiempre Feliz mes de la educación!',
"10" => '¡Octubre Feliz mes de la diversión!',
"11" => '¡Noviembre Feliz mes de las compras!',
"12" => '¡DiciembreFeliz mes de Navidad!',
default => '¡Mes desconocido!',

}; 
echo $resultado;


?>