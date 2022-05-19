<?php 
session_start();
$id = $_SESSION['id'];
$password = $_POST['password'];
$new_password = $_POST['new-password'];
require "../connect-db.php";
$sql = "SELECT * FROM `jounalists` WHERE id = $id and `password`='$password'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $sql = "UPDATE `jounalists` SET `password`='$new_password' WHERE id = $id";
    $conn->query($sql);
    echo "<script>alert('Đổi mật khẩu thành công');</script>";
    header("location: home.php");
    exit();
}
else{
    header("location: change-pwd.php?noti=Mật khẩu sai!!!");
    exit();
}
?> 