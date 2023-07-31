<?php

include_once 'class/Personnage.php';

class Mage extends Personnage{

    public function __construct(){
        parent::__construct();
        $this->AP=20;
        $this->PV=15;
        $this->DEF=3;
        $this->MR=4;        
    }
}
?>