<?php  

//Los Objetos en POO tienen propiedades (atributos) y caracteristicas, ademas de comportamientos
//Clase es un modelo donde se redactan las caracteristicas de objetos en comun
//Instancia, es un ejemplar de una clase.

//Clase
class Coche {

	//Atributos o caracteristicas de la clase

	var $color;

	var $ruedas;

	var $motor;

	//Funciones o metodos de la clase

	//Funcion llamada igual que la clase, es una metodo contructor, es decir inicializa los atributos de la clase
	 function Coche(){

		$this -> ruedas=4;
		$this -> color="rojo";
		$this -> motor=1600;

	}

	//Funciones sencillas que definen el comportamiento de la clase
	 function arrancar(){

		echo "Estoy arrancando" . "<br>";

	}

	function girar(){

		echo "estoy girando" . "<br>";

	}

	function frenar(){

		echo "estoy frenando" . "<br>";

	}
}

//Instancias de la clase coche Y/O Creacion de los objetos del tipo de la clase Coche
$renault = new Coche();
$ford = new Coche();
$mazda = new Coche();


//Objeto mazda hace el llamado o instancía al metodo girar.
$mazda ->girar();


//Asigna al objeto mazda el contenido de la variable motor y hace la impresion del mismo
echo $mazda ->motor;



?>