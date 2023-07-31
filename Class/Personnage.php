<?php



abstract class Personnage {
    
    public $PV;
    public $AP;
    public $ATK;
    public $DEF;
    public $MR;

public function __construct(){
    $this->PV=20;
    $this->AP=10;
    $this->ATK=10;
    $this->DEF=5;
    $this->MR=2;
        
}

public function Carac(){
    
    echo '<br>Point de vie: '. $this->PV .'<br>Ability Power: '.$this->AP.'<br>Attack: '.$this->ATK.'<br>Défense: '.$this->DEF.'<br>Résistance Magique: '.$this->MR.'<br></br>';

}

}

?>