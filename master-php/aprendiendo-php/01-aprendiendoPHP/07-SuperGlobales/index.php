<?php

//Variables SuperGlobales

    //Variables de servidor
    // nombre direccion ip
    echo '<h1>'.$_SERVER['SERVER_NAME'].'</h1>';
    // Software del servidor 
    echo '<h1>'.$_SERVER['SERVER_SOFTWARE'].'</h1>';
    // USER_AGENT
    echo '<h1>'.$_SERVER['HTTP_USER_AGENT'].'</h1>';
    // IP DEL CLIENTE
    echo '<h1>'.$_SERVER['REMOTE_ADDR'].'</h1>';

?>