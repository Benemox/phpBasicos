<?php
$state="faltan_valores";
if(isset($_POST["nombre"])&&isset($_POST["apellido"])&&isset($_POST["edad"])&&isset($_POST["pass"])){

    $state="hola";
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $email=$_POST["email"];
    $password=$_POST["pass"];


}else{
    header("Location:index.php?error=$state");
}
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
    <?php
       echo "<h1>Wuaaau!</h1>";
       var_dump($_POST)
    ?>
</body>
</html>