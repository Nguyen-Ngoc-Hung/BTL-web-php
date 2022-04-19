<?php 
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng bài</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <b>Giao diện trang chủ cho nhà báo</b>
    <?php 
    require "menu.php";
    ?> 
    <div class="center">
        <h1>Các bài viết đang chờ duyệt</h1>
        <?php 
        require "../connect-db.php";

        $sql = "SELECT `id`, `title`, `summary`, `link_image`, `content`, `arthur`, `date`, `views` FROM `news` WHERE `arthur`='$id' and approved=0";
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
                        <a href="show-news.php?id=<?php echo $row['id'].'&title='.$row['title']?> "><?php echo $row["title"]?></a> 
                    </h2>
                    <p>
                        <?php echo $row['summary'] ?> 
                    </p>
                </div>
                <div class="info"><p>Số lượt xem: <?php echo $row['views']?> Ngày đăng: <?php echo $row['date']?> </p></div>
            </div>
        </div>

        <?php
            }
        }
        ?>
    </div> 

    <style>
        .person{
            height: 50px;
            width: 100%;
            display: flex;
            justify-content: end;
        }
        .avatar{
            width: 50px;
            height: 50px;
            border-radius:50%;
            background-image: url("<?php echo $avatar?> ");background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            border: 2px solid green;
            background-size: cover;
            margin: 0px 10px;
        }
    </style>
    
</body>
</html>