<?php
//Predefinidas

//Debugear 
$nombre = "Abel Abbasi";
var_dump($nombre);

// Fecha
function abel(){
    return "  <p>funciona</p>";
};
echo date("d-m-Y");
echo abel();

//Mas funciones generales
echo gettype(abel());//que tipo es


// is_(lo que sea) es un validador intregado dentro de PHP
if(is_string(abel())){
    echo "<p>Es string</p>";
};
// trim limpia
var_dump(trim(abel()));
// unset limpia el contenido
$year=2020;
echo $year;
unset($year);
var_dump($year);

//Comprobar variable vacia 
if(empty($year)){
    echo " hay algo";
}else{
    echo "no hay nada ";
};
// lengh 
//contar caracteres de un strng
$cadena = "12345";
echo strlen($cadena);
echo "<br/>";
//Encontrar un caracter te dice donde empieza
echo strpos($cadena,"3");

//reemplazar palabras de un string
$cadena = str_replace("3","null",$cadena);
echo "<br/>";
echo $cadena;
// Mayusculas y minusculas
echo strtolower($cadena)//minuscula
echo strtoupper($cadena)//mayuscula




?>
