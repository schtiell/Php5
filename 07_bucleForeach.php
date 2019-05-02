<?php

//Bucle foreach utilizado para recorrer el contenido de los vectores o arrays 

//Array predefinido
$vectorpredefinido = array ("elemento1", "elemento2");

foreach ($vectorpredefinido as $elementosarray)
{
    echo $elementosarray . "<br />";
}


//Array asociativo. La variable dato contiene el nombre del indice del array y $contenido el valor del indice de cada elemento.
//$datos = elemento1, elemento2, elemento3
//$contenido = dato1, dato2, dato3

$vectorasociativo = array ("elemento1" => "dato1", "elemento2" => "dato2", "elemento3" => "dato3");

foreach ($vectorasociativo as $datos => $contenido)
{
    echo $datos .  " = " . $contenido . "<br />"; 
}


?>