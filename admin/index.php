<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang admin</title>
</head>
<body>
    Giao diện trang admin
    <?php 
    if(isset($_GET['noti'])){
        $noti = $_GET['noti'];
        echo "<p style='color: red;'>".$noti."</p>";
    }
    ?> 
    <form action="process-login.php" method="POST">
    <?php 
    require "../login.php";
    ?> 
    <button>Đăng nhập</button>
    </form>
</body>
</html>