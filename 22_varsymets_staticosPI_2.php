<?php

include ("22_variablesymetodos_staticosPI.php");

//La manera de llamar a un metodo STATIC de una clase debe ser nombredelaClase::nombredelMetodo();
//Con llamarlo solo una ves este se aplicará en todas las instancias de la clase que se realicen.
comprarAuto::apoyoCompra();

//primera instancia de la clase comprarAtuto
$cliente1 = new comprarAuto("basico");
$cliente1->clima();
$cliente1->tapiceriaPiel("Gris");
echo "El costo para el primer cliente es: " . $cliente1->precioTotal() . "<br>";

//Segunda instancia de la clase comprarAtuto
$cliente2 = new comprarAuto("basico");
$cliente2->clima();
$cliente2->tapiceriaPiel("blanco");
echo "El costo para el segundo cliente es: " . $cliente2->precioTotal() . "<br>";


?> 