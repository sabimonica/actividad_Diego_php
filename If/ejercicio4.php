<?php
$edad = readline ("Por favor ingrse su edad: ");
$licencia = readline ("Tiene licencia de conducción: ");

if ($edad >= 18) {
    echo " Usted es mayor de edad";
   
    if ($licencia == 'si') {
        echo " Puedes conducir";
    }else {
        echo ", debe obtener la licencia de conducir primero";
    }
}else {
    echo " Usted es menor de edad no puede conducir";
}
?>