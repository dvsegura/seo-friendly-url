<?php
$request = $_SERVER['REQUEST_URI'];
$arr_request = explode("/",$request);
//procesar la url
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URLs amigables</title>
</head>
<body>
    <h1>SEO - URLs amigables</h1>
    <!-- <a href="blog.php?publicacion_id=10">Ver Publicación</a> -->
    <!-- <a href="escape/10">Ver Escape</a> -->
    <a href="escape-room/10">Ver Escape</a>
    <a href="escape-online/11">Ver Escape online</a>
    <div>
        <a href="es/servicio/programacion">Reservar</a>
    </div>
</body>
</html>