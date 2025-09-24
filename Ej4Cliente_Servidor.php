<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<?php
//Array indexado
$persona = ["Carlos",20,"carlossanchezgarcia005@gmail.com"];

//Array Asociativo
$persona2 = [
    "nombre" => "Mario",
    "edad" => 20,
    "correo" => "mario@gmail.com"
];

$numeros = [1,2,3];

foreach($numeros as &$numero){
    $numero *=2;
}

print_r($numeros);
//Recoorer Array con for clásico
for ($i = 0; $i < count($persona); $i++) {
    echo "$persona[$i]" . "<br>";
}
//Recorrer un array con un for each
foreach($persona2 as $clave => $valor){
 echo $valor . "<br>";
}

//Ej1 Tenemos un array indexado de colores y mediante la funcion in_array queremos saber si contiene el color azul

$colores = ["rojo","verde","azul"]; // Array indexado

if(in_array("azul",$colores,)){
echo "Se encontro el color azul" . "<br>";
}else{
echo "No se encontro el color azul" . "<br>";
}


/**
 * Ejercicio 2 Tenemos un array indexado de colores y sin usar funciones queremos saber si contiene el color azul
 */

foreach ($colores as $color){
    if($color == "azul"){
    echo "Se encontró el azul" . "<br>";
    break;
    }else{
    echo "no se encontro el azul" . "<br>" ;
    }
}
/**
 * Ejercicio 3 Crear un array de numeros relleno y otro de numeros pares vacio, llenar el de numeros pares con los numeros pares del primer array
 */

$num = [1,2,3,4,5]; $pares =[];

foreach ($num as $par){
   if($par % 2 == 0){
    array_push($pares,$par);
   }
}
print_r($pares) . "<br>";
/**
 * Ejercicio 4Modificar el ejercicio anterior para que en lugar de guardar los numeros pares,guarde los numeros multiplos de 5
 */
$multiplos = [];
foreach ($num as $multiplo){
if($multiplo % 5 == 0){
$multiplos[] = $multiplo;
}
}
print_r($multiplos) . "<br>";

/**
 * Ejercicio 5 Dado el siguiente código, imprime la suma de las edades y el promedio de las edades
 * 
 */
$edades=[10,20,21,25];
$suma = 0;
$promedio =0;

foreach ($edades as $edad){
     $suma += $edad;
}
$promedio = $suma / count($edades);
    echo "La suma de las edades es " . $suma . "<br>" . " y el promedio $promedio " . "<br>";
?>

<h1><?php
echo "Hola mi nombre es " . $persona[0] . " mi edad es " . $persona[1] ." y mi correo es ". $persona[2];
?></h1>
</body>

</html>