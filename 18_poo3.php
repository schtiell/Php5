<?php
class Coche {

	//Atributos o caracteristicas de la clase

	var $color;

	var $ruedas;

	var $motor;

	//Funciones o metodos de la clase

	//Funcion llamada igual que la clase, es una metodo contructor, es decir inicializa los atributos de la clase
	 function Coche(){

		$this -> ruedas=4;
		$this -> color="";
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

	/*
	function estableceColor($nombreCoche, $colorCoche){

		$this->color=$colorCoche;
		echo "El coches un " . $nombreCoche . " y su color es: " . $this->color . "<br>";

	}
	*/
}

//-----------------------------------------------------------------------------------------------------------------

class Camion{

	//Atributos o caracteristicas de la clase

	var $color;

	var $ruedas;

	var $motor;

	//Funciones o metodos de la clase

	//Funcion llamada igual que la clase, es una metodo contructor, es decir inicializa los atributos de la clase
	 function Camion(){

		$this -> ruedas=8;
		$this -> color="";
		$this -> motor=2600;

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

	function estableceColor($nombreCoche, $colorCoche){

		$this->color=$colorCoche;
		echo "El Camion un " . $nombreCoche . " y su color es: " . $this->color . "<br>";

	}
}


?>