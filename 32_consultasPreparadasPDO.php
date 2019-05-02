<?php 

$clave = $_GET["clave"];

try {

	$base = new PDO ('mysql:host=localhost; dbname=sistema','root','');
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//el objeto llama a la función exec en este caso por parametro se le especifica el juego de caracteres a utilizar
	$base->exec("SET CHARACTER SET utf8");

	//Consulta. El ? es un parametro que recibirá más adelante para completar la sentencia
	$query="SELECT NOMBRE, APELLIDO, EDAD FROM datos_usuarios WHERE CLAVE = ?";

	//La variable resultado contiene el objeto PDO STATEMENT que devuelve la función prepare
	//Paso 1. de las consultas preparadas
	$resultado = $base->prepare($query);

	//el objeto PDO STATEMENT contenido en la variable $resultado instancía la función execute que recibe como parametro un array con el argumento $clave, es decir lo que el usuario indica en el formulario html
	$resultado->execute(array($clave));

	echo "<b>Los datos de la consulta son: </br></b>";

	//Se crea la variable registro que contendrá el record set o tabla virtual de la consulta generada y poder imprimir registro a regristro
	while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
 
		
		echo "Nombre " . $registro['NOMBRE']. " Apellido " . $registro['APELLIDO'] . " Edad " . $registro['EDAD'] . "<br>";
	}

	//Cierra el recorrido del record set para no seguir gastando memoria
	$resultado->closeCursor();

} catch (Exception $e) {
	die ('Error: ' . $e->getMessage());
}

 ?>