<?php

$operacion = $_POST['lista'];
$a = $_POST['c1'];
$b = $_POST['c2'];
$c = $_POST['c3'];


//!empty funcion para verificar que una variable no esta vacia
if (!empty($a) && !empty($b) && !empty($c))
{
    echo "El resultado es: ";
    switch($operacion)
    {
        case 'sumar':
        echo $a+$b+$c;
        break;
        
        case 'restar':
        echo $a-$b-$c;
        break;
    
        case 'multiplicar':
        echo $a*$b*$c;
        break;    
       
        case 'dividir':
        echo ($a/$b)/$c;
        break;  
            
        default: echo "no se pudo realizar la operacion";
    }
}
else
echo "Debes llenar todos los campos";

?>