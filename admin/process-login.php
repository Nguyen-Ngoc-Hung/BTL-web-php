<?php 
$email = $_POST['email'];
$password =addslashes($_POST['password']);

require "../connect-db.php";
$sql = "SELECT `id`, `name`, `email`, `password`, `role` FROM `admin` WHERE email='$email' and password='$password'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($result->num_rows !=1){
    $conn->close();
    header("location:index.php?noti=Email hoặc mật khẩu không đúng");
    exit;
}
else{
    $id = $row['id'];
    $name = $row['name'];
    session_start();
    $_SESSION['id']=$id;
    $_SESSION['name'] = $name;
    $conn->close();
    header("location:home.php");
}
