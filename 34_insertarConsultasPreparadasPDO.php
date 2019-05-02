<?php 

$clave = $_GET["clave"];
$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$edad = $_GET["edad"];

try {

	$base = new PDO ('mysql:host=localhost; dbname=sistema','root','');
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//el objeto llama a la función exec en este caso por parametro se le especifica el juego de caracteres a utilizar
	$base->exec("SET CHARACTER SET utf8");

	//Query realizado a la tabla de datos_usuarios, recibe MARCADORES como parametros que permite usar arrays asociativos. 
	$query="INSERT INTO datos_usuarios (CLAVE,NOMBRE,APELLIDO,EDAD) VALUES (:C_CLAVE, :C_NOMBRE, :C_APELLIDO, :C_EDAD)";

	//La variable resultado contiene el objeto PDO STATEMENT que devuelve la función prepare
	//Paso 1. de las consultas preparadas
	$resultado = $base->prepare($query);

	//el objeto PDO STATEMENT contenido en la variable $resultado instancía la función execute que recibe como parametro un array con los argumentos SECCION=>$seccion y PAIS=>$porigen, es decir lo que el usuario indica en el formulario html
	$resultado->execute(array(":C_CLAVE"=>$clave, ":C_NOMBRE"=>$nombre, ":C_APELLIDO"=>$apellido, "C_EDAD"=>$edad));

	echo "Registro insertardo";

	//Cierra el recorrido del record set para no seguir gastando memoria
	$resultado->closeCursor();

} catch (Exception $e) {
	die ('Error: ' . $e->getMessage());
}




 ?>