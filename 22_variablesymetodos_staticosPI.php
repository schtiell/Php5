<?php

class comprarAuto{

	//Atributos de la clase
	private $preciobase;

	//Varible de tipo PRIVATE STATIC, se protege para no modificarla desde fuera de la clase
	private static $descuento;

	//Metodos de la clse
	//Metodo constructor de la clase
	public function __construct($gama){
		if ($gama=="basico"){
			$this->preciobase=180000;
		}elseif ($gama=="medio"){
			$this->preciobase=220000;
		}elseif ($gama=="lujoso"){
			$this->preciobase=250000;
		}
	}


	public function clima(){
		$this->preciobase+=2500;	
	}


	public function navegadorGps(){
		$this->preciobase+=2500;
	}


	public function tapiceriaPiel($color){
		if($color=="blanco"){
			$this->preciobase+=3000;
		}elseif ($color=="beige"){
			$this->preciobase+=3500;
		}else{
			$this->preciobase+=5000;
		}
	}

	/*METODO STATICO, este metodo aplicará el descuento si se cumple la condicion de la fecha.
	Aunque se invoque a la clase desde diferentes objetos, con una sola ves que se invoque al metodo este se aplicará 
	para todas las instancias.

	NOTA: NO DEBE LLEVAR PRIVATE YA QUE SI NO MARCARÁ UN ERROR PORQUE NO SE PODRÁ ACCEDER A EL DESDE LA INVOCACIÓN FUERA DE LA CLASE*/
	static function apoyoCompra(){
		if(date("m-d-y")>"04-01-17"){

			//Para llamar a una variable estatica debe utlizarse la instrucción SELF::
			self::$descuento=4850;
		}
	}

	public function precioTotal(){
		$total;
		$total = $this->preciobase - self::$descuento;
		return $total;
	}
}

?>