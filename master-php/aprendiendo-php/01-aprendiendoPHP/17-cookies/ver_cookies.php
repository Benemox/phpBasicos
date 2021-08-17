<?php

// Para mostrar el valor de cookies, puedes usar $_COOKIE, es una variable super global.

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
};
/// No¡¡Borrar Cookie
// setCookie("micookie,"",time()-100)
?>