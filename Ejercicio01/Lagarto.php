<?php

    include_once 'Animal.php';
    
    class Lagarto extends Animal{
        
        public function __construct($s) {
            parent::__construct($s);
        }
        
        public function TomaElSol(){
            return "Que calorcito mas bueno ^^";
        }
        
        public function AtrapaMoscas(){
            return "Ñaam";
        }
        
        public function Repta(){
            return "Ya me estoy arrastrando";
        }
    
        
        
        
    }