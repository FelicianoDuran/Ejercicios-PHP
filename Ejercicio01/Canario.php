<?php
    
    include_once 'Ave.php';
    
    class Canario extends Ave{
       
        private $raza;
        
        public function __construct($s, $r) {
            parent::__construct($s);
            if(isset($r)){
                $this->raza = $r;
            } else {
                $this->raza = "Ruiseñor";
            }            
        }
        
        public function __toString() {
           return parent::__toString()."<br>Raza: $this->raza";
        }
        
        public function canta() {
            return "Tralarii,tralarii";
        }
       
        public function pia() {
            return "Pio piooo";
        }
        
        
        
        
        
        
    }

   