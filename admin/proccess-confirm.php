<?php 
$id = $_GET['id'];
$ctrl = $_GET['ctrl'];
require "../connect-db.php";
if($ctrl == 'yes'){
    $sql = "UPDATE `jounalists` SET`confirmed`= 1 WHERE id=$id";
}elseif($ctrl == 'no'){
    $sql = "UPDATE `jounalists` SET`confirmed`= 2 WHERE id=$id";
}
$conn -> query($sql);
$conn -> close($sql);
header('location: confirm.php');
