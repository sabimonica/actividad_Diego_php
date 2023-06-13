<?php
$num = readline ("Ingrese un numero para saber saber si es mayor,menor o igual a 10:  ");

if ($num < 10) {
    echo $num. " Es menor a 10";
}elseif ($num > 10) {
    echo $num. " Es mayor a 10";
}else{
    echo $num. " Es igual a 10";
}

?>