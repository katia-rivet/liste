<?php
require_once ('../common/connectionBase.php');


$id = $_GET['id'];

$stmt = $connection->prepare("DELETE FROM `series` WHERE `series`.`id`=:id;");
$stmt->bindParam(':id',$id);
$stmt->execute();



