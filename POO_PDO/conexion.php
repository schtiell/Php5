 <?php 

	require ("config.php");

	class Conexion{

		//ATRIBUTOS 
		protected $conexiondb;


		//METODOS
		public function __construct(){

			try{

				$this->conexiondb = new PDO ('mysql:host=localhost; dbname=sistema', 'root','');

				//$this->conexiondb = new PDO("mysql:host=DB_HOST; dbname=DB_NAME", DB_USER, DB_PWD);

				$this->conexiondb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->conexiondb->exec("SET CHARACTER SET utf8");

				return $this->conexiondb;

			}catch(Exception $e){

				echo "El error en la conexion es: " . $e->getMessage();	
			}
		}
	}
 ?>