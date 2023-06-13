<?php
$dia = readline("Por favor dijite un numero para saber que dia de la semana es: ");

if ($dia==1) {
    echo "Lunes";
}elseif ($dia==2) {
    echo "Martes";
}elseif ($dia==3) {
    echo "Miercoles";
}elseif ($dia==4) {
    echo "Jueves";
}elseif ($dia==5) {
    echo "Viernes";
}elseif ($dia==6) {
    echo "Sabado";
}elseif ($dia==7) {
    echo "Domingo";
}else {
    echo "Numero inválido";
}
?>
