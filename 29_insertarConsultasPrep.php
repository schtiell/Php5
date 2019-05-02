<?php 
 
	//Variables para guardar los datos del formulario HTML
	$clave = $_GET["clave"];
	$nombre = $_GET["nombre"];
	$apellido = $_GET["apellido"];
	$edad = $_GET["edad"];

	//Llamado del archivo php que contiene las instrucciones de conexión a la Base de datos
	require("conexionbd.php");

	/*Varibale que contiene el query, VALUES(?,?,?,?) como es una consulta preparada se ponen los signos ??? ya que mas adelante se completara el query*/
	$sql = "INSERT INTO datos_usuarios(CLAVE, NOMBRE, APELLIDO, EDAD) VALUES (?,?,?,?)";
 
 	//Variable que contiene la función mysqli_prepare, recibe la variable de conexion a la bd y la variable del query
	$resultado = mysqli_prepare($conexion, $sql);

	/*Función para completar la sentencia sql contenida en la variable $sql, RECIBE 3 PARAMETROS:
		1. el objeto que retorma la función mysqli_prepapre
		2. el tipo de datos que recibe cada campo de la tabla donde se va a insertar cada dato. (Una letra por cada dato a insertar)
		3. Las variables que contienen los datos a insertar, deben estar en el mismo orden que en la tabla de la BD
	*/
	$ok = mysqli_stmt_bind_param($resultado, "sssi", $clave, $nombre, $apellido, $edad);

	//Mysqli_stmt_execute ejecuta al consulta sql	
	$ok = mysqli_stmt_execute($resultado);

	//Si la función execute retorna un valor true quiere recir que realizo la consulta si no entonces es porque hay algun errar
	if ($ok == false) {
		echo "Error al realizar la inserción...";
	}else{
		echo "Se inserto el nuevo usuario con consultas preparadas";
	}

	//Cierra la consulta y la conexion a la base de ddatos
	mysqli_stmt_close($resultado);

 ?>