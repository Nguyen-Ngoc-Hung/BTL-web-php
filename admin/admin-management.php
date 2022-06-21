<?php session_start();
if(!isset($_SESSION['id'])){
    header("location: ./index.php");
    exit();
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    Trang quản lý quản trị viên
    <?php 
    require "menu.php";
    require "../connect-db.php";
    ?> 
    <a href="add-admin.php">Thêm quản trị viên</a>
    <div class="center">
    <h1>Danh sách quản trị viên hiện tại</h1>
    <?php 
    $sql = "SELECT `id`, `name`, `email`, `password`, `role` FROM `admin` WHERE 1";
    $result = $conn->query($sql);
    foreach($result as $row){
        $tong_bai= ($conn->query("SELECT * FROM news where approved =" . $row['id']))->num_rows;
        $thang_nay = ($conn->query("SELECT * FROM `news` WHERE approved=".$row['id']." and DATE(`date`) LIKE '". date("Y-m-")."%'"))->num_rows;
    ?> 
        <div class="journalist">
            <div class="avatar" style="background-image: url('../journalist/<?php echo $row['avatar']; ?> ')" >

            </div>
            <div class="name">
                <p><?php echo$row['name']?></p>
                <div class="data">
                    <p>Tháng này đã duyệt: <?php echo $thang_nay?>  bài</p>
                    <p>Tổng bài đã duyệt:  <?php echo $tong_bai?> bài</p>
                </div>
            </div>
        </div>
        <?php 
    }
    ?> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>