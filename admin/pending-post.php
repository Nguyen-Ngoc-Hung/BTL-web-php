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
</head>
<body>
<?php 
require "menu.php";
$sql = "SELECT `id`, `title`, `summary`, `link_image`, `content`, `arthur`, `date`, `views` FROM `news` WHERE approved=0";
?> 
    <div class="center">
        <h1>Duyệt bài</h1>
        <?php 
        require "../connect-db.php";

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
</body>
</html>