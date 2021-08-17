<?php


//Bucle While
// while(condicion){bloque de instruciones}
$numero = 0;
if(isset($_GET['numero'])){
    $numero=(int)$_GET('numero');
}else{
    $numero = 1;
}
echo " <h2>*tabla de multiplicar del numero $numero</h2>";

$contador = 0;

while($contador <= 10){
   $resultado = $contador*$numero;
    echo "$numero * $contador  = $resultado";
    echo "<hr/>";
    $contador++;     
}


?>