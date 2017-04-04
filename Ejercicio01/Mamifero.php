<?php

    include_once 'Animal.php';
    
    class Mamifero extends Animal {
        
    public function __construct($s) {
        parent::__construct($s);
    }
    
    public function amamanta(){
        if($this->getSexo("macho")){
            return "Lo siento no puedo amamantar";
        } else {
            return "Vamos hijo CRECEE!";
        }
    }

    public function anda () {
        return "Estoy andando";
    }
    

        
        
        
        
        
    }