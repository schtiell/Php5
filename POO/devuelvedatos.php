<?php 

	require ("conexion.php");

	class solicitandoDatos extends Conexion{
	

	//ATRIBUTOS DE LA CLASE


	//METODOS DE LA CLASE

		public function __construct(){

			//parent:: __construct();
			Conexion:: __construct();
		}

		public function getDatos(){

			$resultado = $this->conexiondb->query('SELECT * FROM datos_usuarios');
			$datos = $resultado->fetch_all(MYSQLI_ASSOC);
			return $datos;
		}
	}
 ?>