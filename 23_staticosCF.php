<?phpi

class Pagina{


//Atibutos
public $nombre="codigoFacilito";
public static $url="www.codigofacilito.com";


//Metodos
//Los metodos estaticos no pueden acceder a las propiedades de la clase. por eso $this->nombre marca un error.
//Aunque solo se ponga static, sin modiifcador de acceso, se incluye implicito el public
static function bienvenido(){	
	echo "Bienvenido a  <b>" . $this->$nombre . "</b> la pagina es: <b>" . self::$url . "</b><br>";
	}		

}

//instancia de la clase y llamado del metodo bienvenido
$pagina = new Pagina();
$pagina->bienvenido();	



?>