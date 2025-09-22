<?php

$contador =1;
$n = 0;

while($contador <= 13){
if($contador % 2 == 0 && $contador % 3 == 0){
$n++;
}
$contador++;
}
echo "El número de divisores en común es : $n";

?>