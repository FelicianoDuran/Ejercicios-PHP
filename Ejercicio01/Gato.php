<?php

    include_once 'Animal.php';
    
    class Gato extends Animal {
        
    private $raza;

        public function __construct($s, $r) {
            parent::__construct($s);
            if (isset($r)){
                $this->raza = $r;
            } else {
                $this->raza = "Persa";
            }
        }
        
        public function __toString() {
            return parent::__toString()."<br>Raza: $this->raza";
        }
        
        public function maulla(){
            return "Miaaaauu";
        }
        
        
        public function come($comida) {
           if ($comida != "pescado"){
               return "No, solo quiero pescado";
           } else {
               return "Mmm, que rico :3";
           }
        }
        
        
        public function PeleaCon($rival) {
          if ($this->getSexo() == "hembra"){
              return "Lo siento no me apetece pelear";
          }  else if ($rival.getSexo == "hembra") {
              return "Lo siento no me gusta pelear con gatas";
          } else {
              return "Soy Iñigo Montoya tú mataste a mi padre, preparate a morir";
          }
        }
        
        public function aseate() {
            return "Déjame lamerme en paz";
         }
           
    }
