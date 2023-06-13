<?php
$limite = intval(readline("Ingrese el número límite: "));

$previo = 0;
$siguiente = 1;

echo "$previo, $siguiente";

while ($previo + $siguiente <= $limite) {
    $nuevo = $previo + $siguiente;
    echo ", $nuevo";

    
    $previo = $siguiente;
    $siguiente = $nuevo;
}
echo "\n";
?>
