<?php
$entrada_lista = readline("Ingrese los elementos de la lista separados por comas: ");
$lista = explode(",", $entrada_lista);
$elemento_buscar = readline("Ingrese el elemento a buscar: ");

$posicion = -1;

for ($i = 0; $i < count($lista); $i++) {
    if ($lista[$i] === $elemento_buscar) {
        $posicion = $i;
        break;
    }
}

if ($posicion !== -1) {
    echo "El elemento $elemento_buscar se encuentra en la posición $posicion.";
} else {
    echo "El elemento $elemento_buscar no se encuentra en la lista.";
}
?>
