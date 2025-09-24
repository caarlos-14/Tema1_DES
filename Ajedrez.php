<?php
$ancho =50 ;
$largo =100 ;

for($i = 0; $i < $ancho ; $i++){
for($j = 0; $j < $largo ; $j++){
if($j % 2 == 0 && $i % 2 == 0 || $j % 2 == 1 && $i % 2 == 1){
echo "⬜";
}else{
echo "⬛";
}
}
echo "<br>";
}
?>