<?php

    include_once 'Animal.php';
    
    class Perro extends Animal {
    
        private $raza;
  
         public function __construct($s, $r) {
          parent::__construct($s);
          if (isset($r)) {
            $this->raza = $r;
          } else {
           $this->raza = "Bulldog";
          }
         }
         
         public function __toString() {
             return parent::__toString()."<br>Raza: $this->raza";
         }
        
         
             public function ladra() {
              return "Guauu Guauu";
            }

            public function dameLaPata() {
              return "Roaaaf aquí tienes mi patita";
            }

            public function caza() {
              return "Estoy cazando, shh";
            }    
         
    }

