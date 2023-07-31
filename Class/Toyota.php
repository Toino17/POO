<?php

include 'Vehicule.php';

class Toyota extends Vehicule{

    private $modele;

    public function __construct($modele){
        parent::__construct('Toyota','2005');
        $this->modele=$modele;
    }
    
    public function GetModele(){
        return $this->modele;
    }

    public function SetModèle($modele){
        return $this->modele=$modele;
    }
    
    public function getInfo(){
        return parent::getInfo().'<br>Modèle: '.$this->modele;
    }
}