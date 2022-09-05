<?php 
echo $_GET['lang'];
echo "<br>";
echo $_GET['page'];
echo "<br>";
echo $_GET['element'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <p>Idioma: <?php echo $_GET['lang']?></p>
    </div>

</body>
</html>