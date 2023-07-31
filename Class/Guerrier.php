<?php

include_once 'class/Personnage.php';

class Guerrier extends Personnage{

    public function __construct(){
        parent::__construct();
        $this->PV=23;
        $this->DEF=8;        
    }
}
?>