<?php  

//Un ejemplo mas de manejo de variables (atributos) y acciones (funciones) de una clase
class Persona{

//Atributos de la clase Persona
public $nombre = "Joaquin";



//Funciones de la clase Persona
public function hablar($mensaje){
	echo $mensaje;
	}
}


//Se crea el objeto de la clase Persona
$persona = new Persona();

//Se instancía a la variable nombre de la clase Persona
echo $persona -> nombre . "<br>";
$persona -> hablar("Estos es un mensaje");

?>