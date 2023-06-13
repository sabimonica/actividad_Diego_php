<?php
$cadena= readline("Ingrese la cadena de texto:");
 
$resultado= match (true){
 strlen($cadena) >=10 =>"La cadena es larga",
default => "La cadena es corta"
};
echo $resultado;

?>