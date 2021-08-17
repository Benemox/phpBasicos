<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <h1>Variable</h1>
<?php

$Nombre = "";
$mi_primera_variable = "hola mundo desde una variable";
$Nombre = $_GET["nombre"];
echo "<h2>".$mi_primera_variable."</h2>";
var_dump($_GET);
echo "<p>".$Nombre."</p>";

?>
</body>
</html>

