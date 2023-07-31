<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<section>
    
<div>

<?php
include_once 'class/Guerrier.php';
include_once 'class/Mage.php';
include_once 'class/Prêtre.php';
include_once 'class/Archer.php';

$guerrier = new Guerrier;
echo'Guerrier: <br>';
$guerrier->Carac();
$mage=new Mage;
echo 'Mage: <br>';
$mage->Carac();
$pretre=new Prêtre;
echo 'Prêtre: <br>';
$pretre->Carac();
$archer=new Archer;
echo 'Archer: <br>';
$archer->Carac();
?>
</div>
<div>

<?php
echo 'Exo2: <br></br>';
include_once 'class/Toyota.php';
$toyotaYaris=new Toyota('Yaris');
echo 'Test Toyota Yaris:<br></br>';
echo $toyotaYaris->getInfo();
echo '<br></br>Test Toyota Corolla:<br></br>';
$toyotaCorolla=new Toyota('Corolla');
echo $toyotaCorolla->getInfo();
?>

</div>
<div>
<?php
echo 'Exo3: Methode Getter // Setter <br></br>';
echo 'Test Toyota Yaris:<br></br>';
echo $toyotaYaris->GetMarque().'<br>';
echo $toyotaYaris->GetAnnée().'<br>';
echo $toyotaYaris->GetModele().'<br></br>';
echo 'Test Toyota Corolla:<br></br>';
echo $toyotaCorolla->GetMarque().'<br>';
echo $toyotaCorolla->GetAnnée().'<br>';
echo $toyotaCorolla->GetModele().'<br></br>';
echo 'Test Setter:<br></br>';
echo $toyotaYaris->SetMarque('TestSetterMarque').'<br>';
echo $toyotaYaris->SetAnnée('TestSetterAnnée').'<br>';
echo $toyotaYaris->SetModèle('testSetterModèle').'<br>';
?>
</div>
</section>