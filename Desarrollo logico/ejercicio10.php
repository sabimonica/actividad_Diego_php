<?php
$entrada = readline("Ingrese los números separados por comas: ");


$lista = explode(",", $entrada);


for ($i = 0; $i < count($lista); $i++) {
    $lista[$i] = intval($lista[$i]);
}

$longitud = count($lista);
for ($i = 0; $i < $longitud - 1; $i++) {
    for ($j = 0; $j < $longitud - $i - 1; $j++) {
        if ($lista[$j] > $lista[$j + 1]) {
           
            $temp = $lista[$j];
            $lista[$j] = $lista[$j + 1];
            $lista[$j + 1] = $temp;
        }
    }
}

echo "Lista ordenada: " . implode(", ", $lista) . "\n";
?>
