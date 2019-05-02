<?php

//Ejemplo de manojo de constructores y destructores de metodos en PHP

class Loteria{


//Atributos de la  clase

public $numero;
public $intentos;
public $resultado = false;

//Mtodos o funciones de la clase

//Metodo constructor se ejecuta obligatoriamente al INSTANCIAR la clase con el objeto
//Los metodos deben ser publicos y no retornan ningun valor
public function __construct	($paramNumero, $paramIntentos){
	$this -> numero = $paramNumero;
	$this -> intentos = $paramIntentos;
}


public function sortear(){
	$minimo = $this-> numero / 2;
	$maximo = $this-> numero * 2;
	for($i=0; $i<$this->intentos; $i++){
		$int= rand($minimo,$maximo);
		$this-> intentos($int);
	}
}

public function intentos($paramInt){
	if($paramInt == $this->numero){
		echo "<b>" . $paramInt . "==" . $this->numero . "</b><br>";
		$this->resultado = true; 
	}else{
		echo $paramInt . "!=" . $this->numero . "<br>";
	}

}

//EL metodo destructor se ejecuta al final de la clase, tienen las mismas caracteristicas del metodo constructor
public function __destruct(){
	if($this->resultado)
		echo "Felicidades, has ganado en " . $this->intentos . " intentos.";
	else
		echo "Lastima, has perdido en " . $this->intentos . " intentos.";
	}
}

$loteria = new Loteria(5,10);
$loteria->sortear();
?>
 