<?php 

$seccion = $_GET["seccion"];
$porigen = $_GET["pais"];

try {

	$base = new PDO ('mysql:host=localhost; dbname=sistema','root','');
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//el objeto llama a la función exec en este caso por parametro se le especifica el juego de caracteres a utilizar
	$base->exec("SET CHARACTER SET utf8");

	//Query realizado a la tabla de productos, recibe MARCADORES que permite usar arrays asociativos. 
	$query="SELECT CODART, NOMBREARTICULO, PAISDEORIGEN FROM productos  WHERE SECCION = :SECCION AND PAISDEORIGEN = :PAIS";

	//La variable resultado contiene el objeto PDO STATEMENT que devuelve la función prepare
	//Paso 1. de las consultas preparadas
	$resultado = $base->prepare($query);

	//el objeto PDO STATEMENT contenido en la variable $resultado instancía la función execute que recibe como parametro un array con los argumentos SECCION=>$seccion y PAIS=>$porigen, es decir lo que el usuario indica en el formulario html
	$resultado->execute(array(":SECCION"=>$seccion, ":PAIS"=>$porigen));

	echo "<b>Los datos de la consulta son: </br></b>";

	//Se crea la variable registro que contendrá el record set o tabla virtual de la consulta generada y poder imprimir registro a regristro
	while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
 
		
		echo "Código " . $registro['CODART']. " Nombre del Articulo " . $registro['NOMBREARTICULO'] . " Origen " . $registro['PAISDEORIGEN'] . "<br>";
	}

	//Cierra el recorrido del record set para no seguir gastando memoria
	$resultado->closeCursor();

} catch (Exception $e) {
	die ('Error: ' . $e->getMessage());
}



 ?>