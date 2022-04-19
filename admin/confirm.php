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
    $sql = "SELECT `id`, `name`, `avatar` FROM `jounalists` WHERE confirmed=0";
    $result = $conn->query($sql);
    foreach($result as $row){
    ?> 
        <div class="journalist">
            <div class="avatar" style="background-image: url('../journalist/<?php echo $row['avatar']; ?> ')" >

            </div>
            <div class="name">
                <p><a href="check-information.php?id=<?php echo $row['id']?> "><?php echo$row['name']?></a></p>
            </div>
        </div>
        <?php 
    }
    ?> 
    </div>
</body>
</html>