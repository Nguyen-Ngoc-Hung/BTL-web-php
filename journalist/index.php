<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ đăng bài</title>
</head>
<body>
    <?php 
    if(isset($_GET['noti'])){
        echo "<p style='color: red;'>".$_GET['noti']."</p>";
    }
    ?> 
    <form action="process-log-in.php" method="POST" >
        <caption>Đăng nhập</caption>
        <?php 
        require "../login.php";
        ?> 
        <button>Đăng nhập</button>
        <a href="registration-form.php">Đăng ký</a>
        <br>
        <a href="">Quên mật khẩu</a>
    </form>
</body>
</html>