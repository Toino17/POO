<?php

abstract class Vehicule{
    private $marque;
    private $annee;

public function __construct($marque,$annee){
    $this->marque=$marque;
    $this->annee=$annee;
}

public function GetMarque(){
    return $this->marque;
}

public function GetAnnée(){
    return $this->annee;
}

public function SetMarque($marque){
    return $this->marque=$marque;
}

public function SetAnnée($annee){
    return $this->annee=$annee;
}


public function getInfo(){
    return "Marque: $this->marque <br> Année: $this->annee";
}
}