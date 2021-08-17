<?php
if(isset($_POST["nombre"] && $_POST["Apellido"])){
    $nombre= $_POST["nombre"]." ".$_POST["Apellido"];
    echo "<h1>Buenos dias, ".$nombre."</h1>";
}else{
    echo "<h1>No tengo ni idea de como te llamas capullo</h1>"
}



?>