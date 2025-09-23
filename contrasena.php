<?php
$longitud = 8;
$passwd="";

$Mayuscula = preg_match('/[A-Z]/',$passwd);
$Minuscula = preg_match('/[a-z]/',$passwd);
$numeros = preg_match('/[0-9]/',$passwd);

if(empty($passwd)) {
echo "la contraseña no puede estar vacia";
}else{
if($Mayuscula && $Minuscula && $numeros){
echo "contraseña valida";

}else{
echo "contraseña incorrecta";
}

}

?>