<?php

$archivo = $_POST['archivo'];

//Permite eliminar archivos de texto plano
unlink($archivo);

echo "El archivo se ha eliminado correctamente";

?>