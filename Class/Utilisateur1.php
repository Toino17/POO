<?php

class Utilisateur1{
    public $pseudo='Tony';
    public $sexe='Garcon';
    public $age='27';
    public $profession='DEV';
    public $chiffrePrefere=17;
    public $citationPreferee='Aucune';
    public function concatinfo(){
        echo '<br>Pseudo: '.$this->pseudo.'<br>sexe: '.$this->sexe.'<br>Age: '.$this->age.'<br>Profession: '.$this->profession.'<br>Chiffre Préféré: '.$this->chiffrePrefere.'<br>Citation Préférée :'.$this->citationPreferee.'<br>';
    }
    
}

?>