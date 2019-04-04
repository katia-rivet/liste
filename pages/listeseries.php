<?php
require_once ('../core/common/connectionBase.php');



$stmt = $connection->prepare("SELECT * FROM `series`");
$stmt->execute();
$lesSeriesSelectionnees = $stmt->fetchall();
// var_dump($resultat);
// print_r($resultat);

foreach($lesSeriesSelectionnees as $laSerie){


?>

<tr>
    <td> <?php echo $laSerie['nom'];?></td>
    <td> <?php echo $laSerie['saisons'];?></td>
    <td> <?php echo $laSerie['etat'];?></td>
    <td> <?php echo $laSerie['recommandation'];?></td>




</tr>

<?php
}
?>
