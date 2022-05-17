<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

require "../connect-db.php";
$sql = "SELECT `id`, `name`, `email`, `password`, `role` FROM `admin` WHERE email='$email'";
$result = $conn->query($sql);
if($result->num_rows != 0){
    header("location: add-admin.php?noti=Email đã tồn tại!!");
    exit;
}
else{
    $sql = "INSERT INTO `admin`(`name`, `email`, `password`, `role`) VALUES ('$name','$email','$password','admin')";
    $conn->query($sql);
    header("location: add-admin.php?noti=Thêm thành công!!!");
    exit;
}

