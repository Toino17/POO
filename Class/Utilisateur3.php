<?php

class Utilisateur3{
    public $pseudo='Benoit';
    public $sexe='Garcon';
    public $age='29';
    public $profession='Vendeur';
    public $chiffrePrefere='4';
    public $citationPreferee='Aucune';
    public function concatinfo(){
        echo '<br>Pseudo: '.$this->pseudo.'<br>sexe: '.$this->sexe.'<br>Age: '.$this->age.'<br>Profession: '.$this->profession.'<br>Chiffre Préféré: '.$this->chiffrePrefere.'<br>Citation Préférée :'.$this->citationPreferee.'<br>';
    }
    
}

?>