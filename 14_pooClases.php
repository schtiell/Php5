<?php

class Persona{
    
    //Declaración de atributos pueden ser variables, constantes o arreglos
    
    public $nombre = array();
    public $apellido = array();
        
        
    //Declaración de metodos o funciones de la clase Persona
    public function guardar($name,$lastname){
        $this->nombre[] = $name;
        $this->apellido[] = $lastname;
    }
     
    //Metodo para recorrer el arreglo y haccer el llamado de un metodo dentro de otro metodo    
    public function mostrar(){
        for($i=0; $i < count($this->nombre); $i++){
        $this->formato($this->nombre[$i], $this->apellido[$i]);    
        }
    }
    
    public function formato($name,$lastname){
        echo "Nombre: " . $name . " | Apellido: " . $lastname . "<br />";
    }     
    }
    
    //Creación del objeto del tipo de la clase Persona
    $persona = new Persona();
    $persona->guardar("Joaquin","Sayago");
    $persona->guardar("Antonio","Trujillo");
    $persona->mostrar();
?>