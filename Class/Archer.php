<?php

include_once 'class/Personnage.php';

class Archer extends Personnage{

    public function __construct(){
        parent::__construct();
        $this->ATK=20;
        $this->PV=15;
        $this->AP=5;        
    }
}
?>