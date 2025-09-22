<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de años bisiestos</title>
</head>
<body>
    <h1>Calculadora de años bisiestos</h1>

    <form method="post">
        <input type="text" class="fecha" name="anio" placeholder="Introduce fecha" required>
        <input type="submit"></input>
    </form>
    <?php 
    function esBisiesto($a){
    if($a % 4 == 0 && $a % 100 != 0 || $a % 400 == 0 ){
    return true;
    }else{
    return false;
    }
    }
    if(isset($_POST["anio"])){
    $a = intval($_POST["anio"]);
    if(esBisiesto($a)){
    echo "<p>Es año bisiesto</p>";
    }else{
    echo "<p>no es año bisiesto</p>";
    }
}
    ?>
    
</body>
</html>