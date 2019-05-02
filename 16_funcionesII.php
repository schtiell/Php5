<?php

//Paso de parametros por VALOR Y POR REFERENCIA
//Funcion que recibe un parametro por referencia
function incrementa(&$valor){


	$valor++;
	return $valor;
}

$numero=5;
echo (incrementa($numero)) . "<br>";

echo $numero . "<br>";



//Recibe un parametro por referencia, recibe un valor y cambia tambien el valor de $cadena fuera de la funcion.
//Modifica el valor del parametro $param y modifica el valor de la variable $cadena.
//Esto es un ejemplo de funcion por REFERENCIA (&)

function cambiaMayus(&$param){

	$param=strtolower($param); //pasa un string  minusculas

	$param=ucwords($param); //cambia la primera letra de cada palabra a mayusculas
	return $param;
}

$cadena="hOLA mUndo";

echo (cambiaMayus($cadena)) . "<br>";

echo $cadena;


?>