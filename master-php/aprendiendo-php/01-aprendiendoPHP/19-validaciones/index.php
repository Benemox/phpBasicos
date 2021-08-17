<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones</title>
</head>
<body>
    <?php
        if(isset($_GET["error"])){
            $error=$_GET["error"];
            if($error == "faltan_valores"){
                echo '<strong style="color:red">introduce todos los datos en el formulario</strong>';
            }
           
        };
    ?>
    <form method="POST" action="procesar_formulario.php">
        <label for="nombre" required="required" pattern="[A-Za-z]+">Nombre</label><br>
        <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br>
        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido" required="required" pattern="[A-Za-z]+"><br>
        <label for="edad">Edad</label><br>
        <input type="number" name="edad" required="required"><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" required="required"><br>
        <label for="pass">Contraseña</label><br>
        <input type="password" name="pass" ><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>