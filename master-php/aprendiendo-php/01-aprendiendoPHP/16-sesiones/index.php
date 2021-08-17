<?php

//sesiones

//iniciar sesion
session_start();
// Local
$variable_normal="soy una cadena de texto";
// Global
$_SESSION["variable_persistente"]= "SOY UNA SESION ACTIVA";

echo $_SESSION["variable_persistente"]

?>