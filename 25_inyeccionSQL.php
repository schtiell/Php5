<?php 

		require ("conexionbd.php");

		/* La funcion mysqli_real_escape_string elimina los caracteres especiales provenientes de los formularios HTML evitando asi la inyeccion SQL a la BD*/
		$nombre = $_GET["nombre"];
		$clave = $_GET["clave"];

		
		if ($nombre && $clave != null){

			//Variable para realizar una seleccion de los datos de la tabla
			//EJEMPLO DE INYECCION SQL 'or'1'='1', si se agreg esta sintaxis en el campo clave del formulario html, devolvera todos los valores contenidos en la tabla a la que se hace referencia en el query
			
			$query="SELECT * FROM datos_usuarios WHERE NOMBRE = '$nombre' AND CLAVE ='$clave'";
			echo $query . "<br>";

			//Query para realizar la consulta a la base de datos
			$resultado=mysqli_query($conexion, $query);
		
			//Esta funcion devuelve el valor de filas afectadas en querys de tipo SELECT
			if(mysqli_num_rows($resultado) != 0){
			
				//revisa linea por linea el resultado del query
				while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
					
				echo "<b>Los datos solicitados son: </b><br><br>";	
				echo "Clave: " . $fila['CLAVE'] . "<br>";
				echo "Nombre: " .$fila['NOMBRE'] . "<br>";
				echo "Apellido: " .$fila['APELLIDO'] . "<br>";
				echo "Edad: " .$fila['EDAD'] . "<br>";
				echo "<br>";

				echo "<a href='index.html'>Volver al Menú</a>";
				}
			}else{
				echo"No hay registros con esos datos";
			}
		}
		else{
			echo "Dedes llenar todos los campos del formulario para realizar la consulta";
		}

		//SI ESTE SIMPLE CODIGO DE INYEECION SE INSERTA EN UN DELETE PUEDE BORRAR TODOS LOS DATOS DE LA TABLA SQL	
		//ES AHI DONDE RADICA EL PELIGRO DE LA INYECCION SQL

		//Cierra la conexión a la base de datos
		mysqli_close($conexion);
?>