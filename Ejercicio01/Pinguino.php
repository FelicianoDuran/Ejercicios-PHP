<?php
    
    include_once 'Ave.php';

    class Pinguino extends Ave{
        
        public function __construct($s) {
            parent::__construct($s);
        }
        
        public function aseate() {
            return parent::aseate(). ", los pinguinos somos muy limpios";
        }
        
        public function nada() {
            return "Mira que rápido nado";
        }
        
        public function vuela(){
            return "¿Acaso no sabes que los pinguinos no pueden volar?";
        }
        
           
        
    }

