<?php

/*
Cookie = Es un fichero que se almacena en el ordenador del usuario
que visita la web con el fin de recordar datos o rastrear el comportamiento
del mismo.
*/

//Crear Cookie

//setcookie("nombre","valor que solo puede ser texto", caducidad, ruta,dominio)

setcookie("micookie", "valor de mi galleta");

//Cookie con expiracion

setcookie("unyear","valor de mi cookie de 365",time()+(60*60*24*365));


?>

<a href="ver_cookies.php">php cookies</a></a>