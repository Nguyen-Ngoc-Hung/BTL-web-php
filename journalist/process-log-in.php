<?php 
$email = $_POST['email'];
$password = $_POST['password'];

require "../connect-db.php";

$sql = "SELECT `id`, `name`, `email`, `password`, `confirmed`, `avatar`, `id_card_photo`, `journalist_card_photo`, `intro` FROM `jounalists` WHERE `email` = '$email' and `password`= '$password'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($result->num_rows != 1)
{
    $conn->close();
    header("location:index.php?noti=Sai tên đăng nhập hoặc mật khẩu");
    exit;
}else{
    if($row['confirmed']==0){
        echo "<h1>Tài khoản của bạn đang đợi xác minh</h1>";
    }elseif($row['confirmed']==2){
        echo "<h1>Bạn không đủ điểu kiện để trở thành nhà báo :((</h1>";
    }elseif($row['confirmed']==1){
        session_start();
        $_SESSION['idj']=$row['id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['avatar']=$row['avatar'];
        header("location:home.php");
    }
}
