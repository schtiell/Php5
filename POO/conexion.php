<?php 

	require ("config.php");


	class Conexion{

		//ATRIBUTOS DE LA CLASE
		protected $conexiondb;

		//METODOS DE LA CLASE
		public function __construct(){

			$this->conexiondb = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);

			if ($this->conexiondb->connect_errno){
				echo "fallo en la conexión a la base de datos: " . $this->conexiondb->connect_errno;
				return;
			}

			$this->conexiondb->set_charset(DB_CHARSET);
		}
	}

 ?>