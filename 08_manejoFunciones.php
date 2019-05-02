<?php


function suma ($parametro1,$parametro2,$parametro3){
    
    $suma=$parametro1+$parametro2+$parametro3;
    $multiplicar = $suma * 2;
    return $multiplicar;
}



echo suma(5,4,6);

?>