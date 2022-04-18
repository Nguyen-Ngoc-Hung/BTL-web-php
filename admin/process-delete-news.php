<?php 
$id = $_GET['id'];
$link_image = "";

require "../connect-db.php";
$sql = "SELECT `link_image` FROM `news` WHERE id=$id";
$result = ($conn->query($sql))->fetch_assoc();
$link_image = $result['link_image'];
unlink($link_image);

$sql = "DELETE FROM `news` WHERE id=$id";
$conn->query($sql);
$conn->close();
header('location:home.php?noti=Đã xoá');
exit;
// 1649671190