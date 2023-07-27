<?php

include 'class/Utilisateur1.php';
include 'class/Utilisateur2.php';
include 'class/Utilisateur3.php';

$moi=new Utilisateur1();
$thomas=new Utilisateur2();
$benoit=new Utilisateur3();

echo 'Pseudo: ', $moi->pseudo ,'<br>';
echo 'Sexe: ', $moi->sexe, '<br>';
echo 'Age: ', $moi->age, '<br>';
echo 'Profession: ', $moi->profession, '<br>';
echo 'Chiffre préféré: ', $moi->chiffrePrefere, '<br>';
echo 'Citation préférée: ', $moi->citationPreferee, '<br></br>';

echo 'Pseudo: ', $thomas->pseudo ,'<br>';
echo 'Sexe: ', $thomas->sexe, '<br>';
echo 'Age: ', $thomas->age, '<br>';
echo 'Profession: ', $thomas->profession, '<br>';
echo 'Chiffre préféré: ', $thomas->chiffrePrefere, '<br>';
echo 'Citation préférée: ', $thomas->citationPreferee, '<br></br>';

echo 'Pseudo: ', $benoit->pseudo ,'<br>';
echo 'Sexe: ', $benoit->sexe, '<br>';
echo 'Age: ', $benoit->age, '<br>';
echo 'Profession: ', $benoit->profession, '<br>';
echo 'Chiffre préféré: ', $benoit->chiffrePrefere, '<br>';
echo 'Citation préférée: ', $benoit->citationPreferee, '<br></br>';

$chiffre=$moi->chiffrePrefere;
$chiffre2=$thomas->chiffrePrefere;
$chiffre3=$benoit->chiffrePrefere;

$addition=$chiffre+$chiffre2+$chiffre3;

echo 'Addition: ', $addition ,'<br>';

echo $moi->concatinfo();
echo $thomas->concatinfo();
echo $benoit->concatinfo();

?>