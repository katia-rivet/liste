<?php
require_once ('../common/connectionBase.php');


$nom=$_POST['nom'];
$saisons=$_POST['saisons'];
$etat = $_POST['etat'];
$recommandation = $_POST['recommandation'];


$stmt = $connection->prepare("INSERT INTO `series` (`nom`, `saisons`, `etat`, `recommandation`) VALUES (:nom, :saisons, :etat, :recommandation);");



$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':saisons', $saisons);
$stmt->bindParam(':etat', $etat);
$stmt->bindParam(':recommandation', $recommandation);

$stmt->execute();


echo'élement rajouté';