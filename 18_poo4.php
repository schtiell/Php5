<?php

//Ejemplo de reutilizacion de codigos invocando clases de otros archivos php
//El archivo 18_poo3.php incluye 2 clases: (camion y coche)
include ("18_poo3.php");

//Se crea un objeto del tipo de la clase Coche
$mazda =  new Coche();

//Se crea un objeto del tipo de la clase  Camion
$autobus =  new Camion();



echo "El mazada tiene " . $mazda->ruedas . " ruedas <br>";
echo "El mazada tiene " . $autobus->ruedas . " ruedas <br>";


//Se pueden instaciar metodos o funciones de clases en otros archivos PHP
$autobus->estableceColor("ADO","Negro");

?>
 