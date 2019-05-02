<?php 


$clave = $_GET["clave"];

try {
	
	$base = new PDO ('mysql:host=localhost; dbname=sistema', 'root','');
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//el objeto llama a la función exec en este caso por parametro se le especifica el juego de caracteres a utilizar
	$base->exec("SET CHARACTER SET utf8");

	//Query realizado a la tabla de datos_usuarios, recibe MARCADORES como parametro la clave del usuario ingresada por teclado
	$query = "DELETE FROM datos_usuarios WHERE CLAVE = :C_CLAVE";
	
	//La variable resultado contiene el OBJETO PDO STATEMEN devuelto por la funcion prepare() que recibe la sentencia SQL
	$resultado = $base->prepare($query);

	//La variable resultado u objeto PDO STATEMEN instancia a la función execute quien recibe como parametro un arrar que a su ves recibe el marcador SQL que contiene la clave del usuarios
	$resultado->execute(array(':C_CLAVE' => $clave)); 

	echo "Registro borrado";

	//El objeto resultado instanciía a la clase closeCursor que cierra el revisado del RECORD SET del arrary
	$resultado->closeCursor();

} catch (Exception $e) {
	die ("error" . $e->getMessage());
}

 ?>