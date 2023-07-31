<?php

class Utilisateur{
    public $pseudo;
    public $sexe;
    public $age;
    public $profession;
    public $chiffrePrefere;
    public $citationPreferee;

    public function __construct($pseudo, $sexe, $age, $profession, $chiffrePrefere, $citationPreferee){
        $this->pseudo=$pseudo;
        $this->sexe=$sexe;
        $this->age=$age;
        $this->profession=$profession;
        $this->chiffrePrefere=$chiffrePrefere;
        $this->citationPreferee=$citationPreferee;
    }

    public function concatinfo(){
        echo '<br>Pseudo: '.$this->pseudo.'<br>sexe: '.$this->sexe.'<br>Age: '.$this->age.'<br>Profession: '.$this->profession.'<br>Chiffre Préféré: '.$this->chiffrePrefere.'<br>Citation Préférée :'.$this->citationPreferee.'<br>';
    }
    
}

?>