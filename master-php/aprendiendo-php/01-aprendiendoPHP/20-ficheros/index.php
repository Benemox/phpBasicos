<?php
/*
//Abrir Archivo
$archivo = fopen("fichero_texto.txt","a+");
//Leer contenido
while(!feof($archivo)){
    $Contenido = fgets($archivo);
    echo $Contenido;
    echo "<br>";
}
//Escribir
fwrite($archivo,'Soy un texto injertado');

// Cerrar Archivo
fclose($archivo);
*/

// Renombrar
//copy("fichero_texto.txt","fichero_copiado.txt") or die("error al copiar");
// Rename
//rename('fichero_copiado.txt', "fichero.txt") or die("Error Al renombrar")
if(file_exists("fichero:texto.txt"))
?>