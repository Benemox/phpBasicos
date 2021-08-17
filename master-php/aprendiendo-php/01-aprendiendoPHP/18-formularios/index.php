<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="recibir.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"/>

        <label for="Apellido">Apellido:</label>
        <input type="text" name="Apellido"/>

        <label for="Archivo">Archivo:</label>
        <input type="file" name="Archivo" multiple="multiple"/>
        <select name="peliculas" id="peliculas">
            <option value="spiderman">s1</option>
            <option value="spiderwoman">s2</option>
            <option value="spiderbaby">s3</option>
        </select>



        <input  type= "submit" value="enviar"/>
        

    </form>
</body>
</html>