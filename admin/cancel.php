<?php
$cancel = $_GET['cancel'];
$id = $_GET['id'];
require "../connect-db.php";
$sql = "UPDATE `news` SET `approved`=-1,`message`='$cancel' WHERE id=$id";
$conn->query($sql);
header("location: pending-post.php");