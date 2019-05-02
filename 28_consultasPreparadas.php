<?php 

/*Las consultas preparadas sirven para evitar la inyección SQL, ademas estas consultas se ejecutan de manera mas eficiente en la base de datos en el servidor*/


//Clave enviada del formulario
$clave = $_GET["clave"];

require("conexionbd.php");

// ? es el criterio de busqueda
$sql="SELECT CLAVE, NOMBRE, APELLIDO, EDAD FROM datos_usuarios WHERE CLAVE= ?";


//mysqli_prepapre, recibe 2 parametros, el objeto de conexion y la variable de consulta sql. Devuelte un objeto de tipo mysqli_stmt
$resultado = mysqli_prepare($conexion, $sql);

/*mysqli_stmt_bind_param agrega el valor en el WHERE de la sentencia SQL, devuelve un valor false o true. Requiere de 3 parametros:
	1. El objeto mysqli_stmt que devuelve la funcion mysqli_prepare
	2. El tipo de dato que se va a incluir en el condicionald de la sentencia SQL (ejemplo string, entero, boleano, flotante, etc) (?)
	3. La varible que contiene el valor condiconal que se agregará en la sentencia SQL (?)*/
$ok = mysqli_stmt_bind_param($resultado, "s", $clave);

/*Mysqli_stmt_execute, ejecuta la sentencia SQL, recibe un parametro, recibe el objeto mysql_stmt que devuelve la función mysqli_prepare, y devuelve un valor false o true */
$ok=mysqli_stmt_execute($resultado); 


if ($ok == false) {
	echo "error al ejeutar la consulta";
}else{

	/*Mysql_stmt_binf_result, Los valores devueltos de la consulta deacuerdo al select son asociados con variables tantos como campos se soliciten en el select. Devuelve true o false, recibe como parametros el objeto mysqli_stmtt y el mismo numero de variables como campos se soliciten*/
	$ok = mysqli_stmt_bind_result($resultado, $clave, $nombre, $apellido, $edad);

	echo "Datos encontrados: <br><br>";

	//mysqli_stmt_fect, solicita el objeto devuelto por la función mysqli_prepare, permite recorrer los resultados de la consulta contenida en la variable $resultado
	while (mysqli_stmt_fetch($resultado)){

			echo $clave . " " . $nombre . " " . $apellido . " " . " " . $edad  . "<br>";
	}

	//Cierra la conexión 
	mysqli_stmt_close($resultado);
}


 ?>