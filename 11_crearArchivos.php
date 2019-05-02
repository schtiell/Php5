<?php


$fi=fopen("archivo.txt","a") or die ("problemas para crear el archivo");
fwrite($fi,"Nombre: ");
fwrite($fi,"\n");
fwrite($fi, $_POST['nombre']);
fwrite($fi,"\n\n");
fwrite($fi,"Comentario: ");
fwrite($fi,"\n");
fwrite($fi, $_POST['comentarios']);
fwrite($fi,"\n");
fwrite($fi,"-----------------------------------------------------------");
fwrite($fi,"\n\n");

fclose($fi);

echo "Datos Guardados Correctamente";
?>