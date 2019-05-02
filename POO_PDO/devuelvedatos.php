<?php 

require ("conexion.php");

class solicitandoDatos extends conexion{


	public function __construct(){

		parent:: __construct();

	}



	public function getDatos($datos){

	$sql = "SELECT * FROM datos_usuarios WHERE CLAVE = '" . $datos . "'";

	$sentencia = $this->conexiondb->prepare($sql);

	$sentencia->execute(array());

	$resulado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

	$sentencia->closeCursor();

	return $resulado;

	$this->conexiondb = null;

	}
}



 ?>