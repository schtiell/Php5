<?php

//Clase Vehiculo
class Vehiculo{

	//Atributos de la clase Vehiculo
	public $motor = false;
	public $marca;
	public $color;


	//Metodos de la clase Vehiculos
	//Modificador de Acceso de tipo PROTECTED, SOLO PUEDE SER INSTANCIADO POR OTRA CLASE, PERO NO POR EL OBJETO
	protected function estado(){

		if($this->motor)
			echo "El motor esta encendido <br>";	
		else
			echo "El motor esta apagado <br>";
	}

	public function encender(){
		if($this->motor){
			echo "Cuidado el motor esta encendido <br>";
				}
		else{
			echo "El motor ahora esta encendido <br>";
			$this->motor=true;
		}
	}
}


//Clase Moto que hereda de la clase Vehiculo
class Moto extends Vehiculo{

//La clase Moto hereda TODOS los atributos y metodos de la clase Vehiculo
//Como todos (atributos y funciones) son publicos (modificadores de acceso), podemos acceder a ellos sin problema alguno

	public function estadoMoto(){
		/*Los metodos y atributos de tipo PROTECTED pueden ser heredados mas no instanciados por los objetos
		unicamente por otras clases. Los de tipo PRIVATE solo pueden ser usados en esa clase, es decir no pueden ser HEREDADOS*/
		$this->estado();
	}

}

class Cuatrimoto extends Moto{

	/*Esta clase hereda metodos y atributos de la clase Moto
	Pero a su ves tambien heredad de la clase vehiculo ya que la clase Moto hereda de la clase Vahiculo.*/
}


//Creacion del objeto $vehiculo...Instancia de la clase Vehiculo
$vehiculo = new Vehiculo;
//$vehiculo->estado(); 
$vehiculo->encender();
//$vehiculo->estado();
$vehiculo->encender();

//Creacion del objeto $moto....Instancia de la clase Moto 
$moto = new Moto();
$moto->estadoMoto();

//Creación del objetos $cuatrimoto...Instancia de la clase Cuatrimoto
$cuatrimoto = new Cuatrimoto();

/*Podemos instanciar al metodo encender ya que es de tipo publico y la clase Cuatrimoto hereda atraves de la clase Moto los metodos y atributos
de la clase Vehiculo*/
$cuatrimoto->encender();

?>