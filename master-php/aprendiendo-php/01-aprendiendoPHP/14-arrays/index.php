<?php

//arrays
$arrays = array("batman","spiderman","el señor de los niños");
$arrays2 = ["topac","Wendy Sulca","Chayane","Arturo"];
var_dump($arrays);
var_dump($arrays2);

//Recorrer

for($i=0;$i < count($arrays);$i++){
    echo "$arrays[$i]";
    echo "<br>";
};
echo"<br>";

foreach($arrays2 as $cantante){
    echo  "<h1>$cantante</h1>";
    echo "<br>";
}

$contactos = array(
    array(
        'nombre' => "victor",
        "email" => "victor@a.es"
    ),
    array(
        'nombre' => "hector",
        "email" => "hector@a.es"
    )
    
);

foreach($contactos as $key => $contacto){
    var_dump($contacto["nombre"]);
    echo "<br>";
    var_dump($key);
}


?>