<?php 

	require ("devuelvedatos.php");

	$datosusuarios = new solicitandoDatos();
	$arrayusuarios = $datosusuarios->getdatos();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
			<?php 

				echo "</p><strong>Los datos de la tabla son :</strong></p>";

				foreach($arrayusuarios as $elemento){
					echo "<table>";
					echo "<tr>";
					echo "<td>" . $elemento['CLAVE']    . "</td>";
					echo "<td>" . $elemento['NOMBRE']   . "</td>";
					echo "<td>"	. $elemento['APELLIDO'] . "</td>";
					echo "<td>" . $elemento['EDAD']     . "</td>";
					echo "</tr>";
					echo "</table>";

					echo "<br>";
				}
			 ?>
</body>
</html>