<?php
/*
//Condicionales


If ==== if(condicion){}else{}
< menor que
*/

//switch
$dia = 7;

switch ($dia){
    case 1:
        echo "lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 6:
        echo "Viernes";
        break;
    default:
        echo "Es finde y el cuerpo lo sabes";
        break;
        
};
//Goto

// Salta hacia el indicador determinado
Goto marca;

    echo "<h1>Aparezco?</h1>";
marca:
    echo "<h1>Esto salta cual trampolin</h1>";


?>