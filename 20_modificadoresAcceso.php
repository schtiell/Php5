<?php

//El siguiente codigo muestra el manejo de modificdores de acceso en POO de PHP.


class Registro{

	//Atributos de la clase
	//Los modificadores de acceso publicos (atributos y funciones) se pueden utilizar desde cualquier parte del codigo, al instanciar a la clase desde el objeto
	//Los modificadores Private o Protected, solamente pueden ser accedidos desde la misma clase.

	public $nombre;
	public $edad;

	//Las variables de tipo private hacen referencia al ENCAPSULAMIENTO YA QUE RESTRINGE EL ACCESO A ELLAS DESDE OTRAS CLASES O INSTANCIAS DE CLASE
	private $password;

	//Funciones de la clase
	//Constructor de la clase que se instancia automaticamente al crear el objeto de la clase, recibe 3 parametros
	public function __construct($paramNombre, $paramEdad, $paramPass){
		$this->nombre = $paramNombre;
		$this->edad = $paramEdad;
		$this->password = $paramPass;
	}

	public function verInformacion(){

		echo "El nombre es: " . $this->nombre . "<br>" ;
		echo "La edad es: " . $this->edad . "<br>" ;
		echo "El password es: " . $this->password . "<br>" ;

		//Se puede cambiar el password ya que estando dentro de la clase se pueden llamar metodos y atributos del tipo private
		//Se llama al metodo cambiarPassword de tipo private y funciona el llamado ya que se puede utilizar siempre y cuando se llame dentro de la clase registro
		$this->cambiarPassword("abcde");	
	}

	private function cambiarPassword($newPass){
		$this->password = $newPass;
		echo "Se cambio el password, el nuevo es: " . $this->password . "<br>";
	}
}

$registro = new Registro("Joaquin Sayago","31",12345);
$registro->verInformacion();

//La siguiente linea marca un error ya que no es posible instanciar la propiedad password de la clase ya que se declaro de tipo private
echo $registro->password;


?>