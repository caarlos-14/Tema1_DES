<?php
$cadena = "Caarlooss_14";
$contador=1;
$salida="";

for($i=0; $i<strlen($cadena);$i++){
if($i + 1 < strlen($cadena) && $cadena[$i] == $cadena[$i+1]) {
$contador++;
}else{
$salida .= $cadena[$i];

if($contador > 1){
$salida .= $contador;
}
$contador=1;
}
}
echo $salida;
?>