<?php 
session_start();
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
    <?php 
    if(!isset($_SESSION['id'])){
        header("location: ./index.php");
        exit();
    }
    $id = $_SESSION['id'];

    require "../connect-db.php";
    $sql = "SELECT `name`, `role` FROM `admin` WHERE id=$id";
    $result = ($conn->query($sql))->fetch_assoc();
    $name = $result['name'];
    $role = $result['role'];
    $conn->close();
    ?> 
    Trang chủ admin
    <?php 
    require "menu.php";
    ?> 
    <div class="center">
        <h1>Tất cả các bài viết</h1>
        <?php 
        require "../connect-db.php";

        $sql = "SELECT `id`, `title`, `summary`, `link_image`, `content`, `arthur`, `date`, `views` FROM `news` WHERE approved not in (0)";
        $result = $conn->query($sql);
        if($result->num_rows == 0)
        echo "Chưa có bài viết nào!";
        else{
            foreach($result as $row){
        ?>
        <div class="news">
            <div class="photo" style="background-image: url('<?php echo $row['link_image']?> ')"></div>
            <div class="content">
                <div class="title">
                    <h2>
                        <a href="delete-news.php?id=<?php echo $row['id'].'&title='.$row['title']?> "><?php echo $row["title"]?></a> 
                    </h2>
                    <p>
                        <?php echo $row['summary'] ?> 
                    </p>
                </div>
                <div class="info"><p>Số lượt xem: <?php echo $row['views']?> Ngày đăng: <?php echo $row['date']?> </p><button class="btn btn-warning"><a href="process-delete-news.php?id=<?php echo $row['id']?> ">Gỡ bài</a></button></div>
            </div>
        </div>

        <?php
            }
        }
        ?>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>