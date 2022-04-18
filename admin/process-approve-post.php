<?php 
session_start();

$id = $_GET['id'];
$ctrl = $_GET['ctrl'];
require "../connect-db.php";
if($ctrl = "approved"){
    $sql = "UPDATE `news` SET `approved`='".$_SESSION['id']."' WHERE id='$id'";
    $conn->query($sql);
    $conn->close();
    header('location:pending-post.php?noti=Đã duyệt');
}elseif($ctrl = "delete"){
    $sql = "DELETE FROM `news` WHERE id=$id";
    $conn->query($sql);
    $conn->close();
    header('location:pending-post.php?noti=Đã xoá');
}