<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

<h1 id="mensaje"></h1>

<script>
    var hora = new Date().getHours();
   var mensaje = document.getElementById("mensaje");

    if(hora > 6 && hora < 12){
    mensaje.innerHTML = "Buenas Días";
    }else if(hora > 13 && hora < 19){
    mensaje.innerHTML = "Buenas Tardes";
    }else{
    mensaje.innerHTML = "Buenas Noches";
    }
</script>

</body>



</html>