<?php 
$id = $_GET['id'];

require "../connect-db.php";
$sql = "SELECT * FROM `jounalists` WHERE id=$id";
$result = ($conn->query($sql))->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="confirm.php"></a>
    <div class="center">
        <div>
            Họ tên: <b><?php echo $result['name']?> </b>
        </div>
        <div>
            Email: <?php echo $result['email']?> 
        </div>
        <div>
            <p>Ảnh đại diện:</p>
            <img src="../journalist/<?php echo $result['avatar']?> " alt="avatar">
        </div>
        <div>
            <p>Ảnh chứng minh nhân dân, CCCD:</p>
            <img src="../journalist/<?php echo $result['id_card_photo']?> " alt="CCCD">
        </div>
        <div>
            <p>Ảnh chụp thẻ nhà báo:</p>
            <img src="../journalist/<?php echo $result['journalist_card_photo']?> " alt="Thẻ nhà báo">
        </div>
        <div>
            Tự giới thiệu:
            <p><?php echo $result['intro']?> </p>
        </div>
        <button><a href="proccess-confirm.php?id=<?php echo $id?>&ctrl=yes">Chấp nhận</a></button>
        <button><a href="proccess-confirm.php?id=<?php echo $id?>&ctrl=no">Không</a></button>
    </div>
</body>
</html>





