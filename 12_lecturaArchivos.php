<?php

//fopen permite abrir el archivo. con el parametro r permite leer el contenido del archivo
$file=fopen("archivo.txt","r") or die ("problemas para leer el archivo");

//feof funcion para leer archivos que retorna true si ha llegado al final del archivo.
while (!feof($file))
{
    //fgets trae el contenido de la variable $file que contiene el arcchivo.txt
    $lectura = fgets($file);
    
    //permite leer los saltos de linea del archivo
    $saltosdelinea = nl2br($lectura);
    echo $saltosdelinea;
        
}
fclose($file);

?>