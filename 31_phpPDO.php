<?php 

	//PDO: PHP DATA OBJECT, es una capa de abstracción, es una especie de libreria 	que contiene funciones para conectar con bases de datos. 


	//Try - Catch es para el manejo de excepciones o errores en tiempo de ejecución. Errores que no son de sintaxis necesariamente.

	//Si no hay error Try intenta ejecutar el bloque de instrucciones contenidas en el
	try{
	
		/*Objeto para la conexion a la base de datos que realiza una instancia (llamado) a la clase PDO que recibe a la vez 3 parametros (Host;  nombre de la BBDD, usuario de la BBDD y contraseña de la BDD*/
		$base = new PDO("mysql:host=localhost; dbname=sistema", "root", ""); 

		echo "Exito al conectar con la base de datos";

	//Catch recoge el error o excepcion en tiempo de ejecución	y lo almacena en el objeto $e que por convención se utiliza la letra E
	}catch (Exception $e) {

		//GetMessage es una función del objeto e
		die("Error " . $e->GetMessage());

	//La sentencia finally se ejectua tanto si se ejecutaron las sentencias dentro del try o del catch.	
	}finally{

		$base = null;
	}	

 ?>