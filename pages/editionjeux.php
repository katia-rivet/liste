<?php

require_once ('../core/common/connectionBase.php');

$id=$_GET['id'];


$stmt = $connection->prepare("SELECT * FROM `series` WHERE `series`.`id` = :id ;");
$stmt->bindParam(':id', $id);
$stmt->execute();
$resultat = $stmt->fetchall();

foreach ($resultat as $item) {
$nom=$item['nom'];
$saisons=$item['saisons'];
$etat=$item['etat'];
$recommandation=$item['recommandation'];
$id=$item['id'];
}


?>


<form action="../core/api/modifier.php" method="POST">
    <input type="hidden" name="id" value="<?=$id?>">

    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" value="<?=$nom?>">

    <label for="editeur">Editeur:</label>
    <input type="text" name="editeur" id="editeur" value="<?=$editeur?>">

    <label for="plateforme">Plateforme:</label>
    <input type="text" name="plateforme" id="plateforme" value="<?=$plateforme?>">

<!--    <label for="image">Image:</label>
    <input type="file" name="image" id="image">-->
    <input type="submit" value="modifier">

</form>