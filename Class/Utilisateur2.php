<?php

class Utilisateur2{
    public $pseudo='Thomas';
    public $sexe='Garcon';
    public $age='28';
    public $profession='Barman';
    public $chiffrePrefere=17;
    public $citationPreferee='Aucune';
    public function concatinfo(){
        echo '<br>Pseudo: '.$this->pseudo.'<br>sexe: '.$this->sexe.'<br>Age: '.$this->age.'<br>Profession: '.$this->profession.'<br>Chiffre Préféré: '.$this->chiffrePrefere.'<br>Citation Préférée :'.$this->citationPreferee.'<br>';
    }
    
}

?>