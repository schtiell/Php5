<?php


//strtolower convierte una cadena de texto en minusculas
//strtoupper convierte una cadena de texto en MAYUSCULAS
//ucwords convierte la primera letra de una cadena de texto en mayusculas

$palabra="JOAQUIN";

echo (strtolower($palabra . "<br>"));

//Función que recibe 2 parametros o argumentos separadas por coma


function suma ($num1,$num2){
	$resultado = $num1 + $num2;

	//RETURN Devuelve un valor
	return $resultado;
}

//La siguiente es un ejemplo de funcion anidada, una funcion dentro de una funcion
//Se llama a la funcion suma y se le envian 2 parametros. e imprime el valor retornado
echo (suma(5,6));

//Las funciones propias son las que construimos nosotros
//Las funciones predefinidas, son funciones propias de PHP


//Funcion que recibe 2 parametros uno por referencia y el segundo por defecto ya que se le asigna un valor
function frase_Mayus($frase, $conversion=true){

	$frase=strtolower($frase);

	if ($conversion!=true){

		$frase=strtoupper($frase);

	}
	else
	{
		$frase=ucwords($frase);
	}

	return $frase;
}


echo (frase_Mayus("este es un ejemplo de conversion de cadena"));
 

?>