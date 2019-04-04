<?php
require_once ('../common/connectionBase.php');

    $nom=$_POST['nom'];
    $saisons=$_POST['saisons'];
    $etat = $_POST['etat'];
    $recommandation = $_POST['recommandation'];
    $id = $_POST['id'];

    $stmt = $connection->prepare("UPDATE `series` SET `nom` = :nom, `saisons` = :saisons, `etat` = :etat, `recommandation` = :recommandation WHERE `series`.`id` = '$id';");

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':saisons', $saisons);
    $stmt->bindParam(':etat', $etat);
    $stmt->bindParam(':recommandation', $recommandation);


    $stmt->execute();

    require_once ('../common/redirection.php');
    redirection('accueil');

