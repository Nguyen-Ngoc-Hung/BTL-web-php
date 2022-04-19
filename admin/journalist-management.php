<?php session_start();?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    Trang quản lý nhà báo
    <?php 
    require "menu.php";
    require "../connect-db.php";
    ?> 
    <a href="confirm.php">Yêu cầu xác minh</a>
    <div class="center">
    <h1>Danh sách nhà báo hiện tại</h1>
    <?php 
    $sql = "SELECT `id`, `name`, `avatar` FROM `jounalists` WHERE 1";
    $result = $conn->query($sql);
    foreach($result as $row){
        $tong_bai= ($conn->query("SELECT * FROM news where arthur =" . $row['id']))->num_rows;
        $thang_nay = ($conn->query("SELECT * FROM `news` WHERE arthur=".$row['id']." and DATE(`date`) LIKE '". date("Y-m-")."%'"))->num_rows;
    ?> 
        <div class="journalist">
            <div class="avatar" style="background-image: url('../journalist/<?php echo $row['avatar']; ?> ')" >

            </div>
            <div class="name">
                <p><?php echo$row['name']?></p>
                <div class="data">
                    <p>Tháng này: <?php echo $thang_nay?>  bài</p>
                    <p>Tổng:  <?php echo $tong_bai?> bài</p>
                </div>
            </div>
        </div>
        <?php 
    }
    ?> 
    </div>
</body>
</html>