<?php
$nota = readline('ingrese su nota entre 0 y 100: ');

$mensaje = match (true) {
    $nota >= 90 && $nota <= 100 => "Excelente paso la materia",
    $nota >= 80 && $nota <= 90 => "Muy bien paso la materia",
    $nota >= 70 && $nota <= 80 => "Bien paso la materia",
    $nota >= 60 && $nota <= 70 => "Suficiente pero deberias esforzarte mas",
    $nota >= 0 && $nota <= 60 => "Insuficiente perdio la materia",
    default => "Nota inválida"
};

echo $mensaje;
?>