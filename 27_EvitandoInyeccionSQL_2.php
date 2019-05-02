<?php 

require ("conexionbd.php");

/* La funcion mysqli_real_escape_string elimina los caracteres especiales provenientes de los formularios HTML evitando asi la inyeccion SQL a la BD*/

$clave = mysql_real_escape_string($_GET["clave"]);

/*Si se aplica la consulta sin la funcion mysql_real_escape_string  entonces la consulta es vulnerable a inyeccion de codigo SQL Y PUEDE BORRAR TODOS LOS USUARIOS ' or'1'='1 ------- 'or 'z'='z (ejemplos de inyeccion de codigo sql)*/
//$clave = $_GET["clave"];


if ($clave != null){
	//Vaariable que contiene la Consulta para eliminar un usuario
	$query = "DELETE FROM datos_usuarios WHERE CLAVE='$clave'";

	//Funcion para realizar la consulta a la BD
	mysqli_query($conexion, $query) or die ("Problemas al borrar el Usuario" . mysqli_error());	

	//Devuelve el numero de filas o registros afectados en consultas DELETE, UPDATE, INSERT
	if (mysqli_affected_rows($conexion) == 0 ) {
		echo "No hay elementos que borrar con esa clave <br>";
		echo "<a href='27_EvitandoInyeccionSQL_2.html'>Volver</a>";
	}else{
		echo "se han eliminado " . mysqli_affected_rows($conexion) . " registros con la clave: " . $clave . "<br>";
		echo "<a href='27_EvitandoInyeccionSQL_2.html'>Volver</a>";
	}
}else{
	echo "Debes escribir la clave del usuario  a borrar";
}

mysqli_close($conexion);









 ?>