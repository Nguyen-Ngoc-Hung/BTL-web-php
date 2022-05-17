<?php 
require "../connect-db.php";
$id=$_GET['id'];
$title = $_GET['title'];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <a href="home.php">Quay lại</a>
    <div class="center">
        <?php require "../news.php"?> 
    </div>

</body>
</html>