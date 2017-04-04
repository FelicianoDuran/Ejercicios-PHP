<?php
    
    include_once 'Animal.php';
   
    class Ave extends Animal {
        
        public function __construct($s) {
            parent::__construct($s);
        }
        
        public function vuela() {
            return "Estoy volando";
        }
        
        public function PonHuevos(){
            if($this->getSexo == "macho"){
                return "Lo siento no puedo ponerte huevos";   
            } else {
                return "Estoy poniendo un huevo, espera un momento";
            }
        }
        
        public function aseate(){
            return "Me estoy limpiando las plumas";
        }
        
    }
    

