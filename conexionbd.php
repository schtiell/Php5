<?php 

		require ("datosConexion.php");

		//Variable de conexióon a la base de datos
		$conexion=mysqli_connect($db_host, $db_user, $db_pwd);

		//Busca los errores al realizar la conexion a la base de datos y si los encuentra, no ejecuta los querys siguientes mediante la función de php exit();
		if (mysqli_connect_errno()){
			echo "fallo al realizar la conexion a la base de datos";
			exit();
		}

		//Funcion que busca la base de datos a conectar
		mysqli_select_db($conexion,$db_namebd) or die ("No se encuentra la base de datos...");

		//Funcion de mysql para reconocer caracteres en latino
		mysqli_set_charset($conexion, "utf8");
 ?>