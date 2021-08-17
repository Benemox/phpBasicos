<?php
// if(!is_dir("mi_carpeta")){

//     //Crear Carpeta
//     mkdir("mi_carpeta",0777) or die("no se pudo realizar la creacion");
//     echo "<h2>Creada</h2>";
// }else{
//     echo "<h2> ya esta Creada</h2>";

//     //Borrar Carpeta
//     rmdir("mi_carpeta");
// };

echo "<br>";
//Leer archivos
if($gestor= opendir("./mi_carpeta")){
    while(false !== ($archivo=readdir($gestor))){
        if($archivo != "." && $archivo != ".."){
            echo $archivo."<br>";
        }
    }
};



?>