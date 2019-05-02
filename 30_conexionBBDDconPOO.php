<?php 

	$conexion = new mysqli ("localhost", "root", "", "sistema");


	//if (mysqli_connect_errno()) Metodo PROCEDIMENTAL DE comprobar si hubo error al intentar conectar con la BBDD

	//METODO ORIENTADO A OBJETOS DE COMPROBAR SI HUBO ERROR AL INTENTAR CONECTAR CON LA BBDD
	if ($conexion->connect_errno){
		echo "Fallo a la conexión de la BBDD" . $conexion->connect_errno;	
	}


	//mysqli_set_charset($conexion, "utf8"); METODO PROCEDIMENTAL

	//Este es el metodo Orientado  a Objetos de incluir la codificación utf8
	$conexion->set_charset("utf8");
	
	//Variable que contiene la consulta sql
	$sql = "SELECT * FROM datos_usuarios";

	//$resultado = mysqli_query ($conexion, $sql)...METODO PROCEDIMENTAL DE EJECUTAR EL QUERY

	//METODO ORIENTANDO A OBJETOS DE EJECUTAR EL QUERY
	$resultado = $conexion->query($sql);


	if ($conexion->errno) {
		die ($conexion->error);
	}

	echo "<b>Los datos solicitados son: </b><br><br>";	

	//METODO PROCEDIMENTAL DE EJECUTAR LA CONSULTA Y EL RECORRIDO DE LA CONSULTA
	//while ($fila =mysqli_fetch_array($resultado, MYSQLI_ASSOC))

	//METODO ORIENTADO A OBJETOS DE RECORRER LA CONSULTA DENTRO DE LA VARIABLE $resultado
	while($fila = $resultado->fetch_assoc()){

		echo "Clave: " 		. $fila['CLAVE'] 	. "<br>";
		echo "Nombre: " 	. $fila['NOMBRE'] 	. "<br>";
		echo "Apellido: "	. $fila['APELLIDO'] . "<br>";
		echo "Edad: "		. $fila['EDAD'] 	. "<br>";
		echo "<br>";

	}

	//mysqli_close($conexion); Metodo PROCEDIMENTAL de cerrar la conexiona  la base de datos

	//METODO ORIENTADO A OBJETOS DE CERRAR LA CONEXION  A LA BASE DE DATOS
	$conexion->close();
 ?>