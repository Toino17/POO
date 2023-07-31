<?php

include_once 'class/Personnage.php';

class Prêtre extends Personnage{

    public function __construct(){
        parent::__construct();
        $this->AP=20;
        $this->MR=4;        
    }
}
?>