<?php
$horas= readline('Ingrese la hora militar: ');
$min =readline('Ingrese los minutos: ');
    $resultado = match (true) {
        $horas >= 0 && $horas <= 6 => "Es de madrugada",
        $horas >= 6 && $horas <= 12 => "Buenos dias",
        $horas >= 12 && $horas <= 18 => "Buenas tardes",
        $horas >= 18 && $horas <= 23 => "Buenas noches",
        default => "Hora desconocida"
    };
echo $resultado;
?>
