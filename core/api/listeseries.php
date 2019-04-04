<?php
require_once ('../common/connectionBase.php');



$stmt = $connection->prepare("SELECT * FROM `series`");
$stmt->execute();
$lesSeriesSelectionnees = $stmt->fetchall();
// var_dump($resultat);
// print_r($resultat);


echo json_encode($lesSeriesSelectionnees);




