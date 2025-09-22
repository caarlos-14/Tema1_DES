<?php

//Variables
$nombre = "Carlos";
$apellido = "Sánchez";

//Mensaje
echo "Mi nombre es " . $nombre . " y mi apellido " . $apellido;

$my_array = [$nombre, $apellido];

print_r($my_array);

//Obtener Tipo de la variable
echo gettype($my_array);

// Añadir elemento al array
array_push($my_array,"Antonio");

print_r($my_array);

//Array asociativo persona
$personas = [
["nombre" => "Carlos","Edad" => "20"],
];
//Bucle para asignar los valores a las variables
foreach ( $personas as $persona){
    $edad = $persona["Edad"];
    $nombre = $persona["nombre"];

//Condicional para mostrar mensaje en base a la edad
if($persona["Edad"] >= 0 && $persona["Edad"] <= 20){
echo "Eres un niño" . "\n";
}elseif($persona["Edad"] >= 21 && $persona["Edad"] <=60){
echo "Eres un adulto" . "\n";
}else{
echo "Eres un viejo" . "\n";
}
}

//Contador hasta 128
$contador = 0;
while($contador < 128){
$contador++;
}
echo $contador . "\n";


$j=0;
for($i = 0;$i <=10;$i = $i +3){
$j = $j + $i;
}
echo $j . "\n";
echo $i . "\n";




//Matriz 4*4
for($i = 0;$i<4;$i++){
for($j=0;$j<4;$j++){
if($j == 1){
echo "X";
}else{
echo "O";
}
}
echo "\n";
}

//Matriz 7 * 7
for($i = 0; $i < 7; $i++){
for($j = 0;$j < 7 ; $j++){
if($i >= 1 && $i <= 5 && $j >= 1 && $j <= 5){
echo "X";
}else{
echo "O";
}
}
echo "\n";
}

?>