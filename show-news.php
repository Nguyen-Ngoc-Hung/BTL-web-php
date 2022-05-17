<?php 
require "header.php";
$id = $_GET['id'];

    require "./connect-db.php";
    $sql = "SELECT `id`, `title`, `summary`, `link_image`, `content`, `arthur`, `date`, `views` FROM `news` WHERE `id`='$id'";
    $result = ($conn->query($sql))->fetch_assoc();
    
    $title = $result['title'];
    $summary = $result['summary'];
    $link_image = ".".ltrim($result['link_image'],".");
    $content = explode(chr(10),$result['content']);
    $id_arthur = $result['arthur'];
    $date = $result['date'];
    $views = $result['views'];
    
    $sql = "SELECT `name` FROM `jounalists` WHERE `id` = '$id_arthur'";
    $rs = ($conn->query($sql))->fetch_assoc();
    $arthur = $rs['name'];
?> 
    <div class="news-details khachhang">
        <div class="title">
            <h1><?php echo $title?></h1> 
        </div>
        <div class="summary">
            <?php echo $summary?> 
        </div>
        <div class="photo">
            <img src="<?php echo $link_image?> " alt="">
            <p>Ảnh minh hoạ</p>
        </div>
        <div class="content">
            <?php 
            foreach($content as $para){
                echo "<p>". $para. "</p><br>";
            }
            ?>
        </div>
        <div class="date">
            <span class="arthur">Tác giả: <?php echo $arthur?> </span>
            <span class="views"><?php echo $date?> </span>
            <span class="views">Số lượt xem: <?php echo $views?> </span>
        </div>
    </div>
    <div class="main">
        <p class="more">Xem thêm</p>
        <?php 
        $sql = "UPDATE `news` SET `views`= views + 1 WHERE id=".$id; 
        $conn->query($sql);
        $sql = "SELECT `id`, `title`, `summary`, `link_image`, `content`, `arthur`, `date`, `views` FROM `news` WHERE approved not in ('0')";
        $result = $conn->query($sql);
        $n = $result->num_rows;
        if($result->num_rows == 0){
        echo "Chưa có bài viết nào!";
        $arr=[];
        }
        else{
            foreach($result as $row){
                $arr[]=$row;
        ?>

        <?php
            }
        }
        ?>
        <div class="subnews-v">
            <div class="boxnews-v">
                <div class="photo">
                    <img src="<?php echo ".".ltrim($arr[$n-1]['link_image'],".") ?>" alt="">
                </div>
                <h1 class="title"><a href='<?php echo "show-news.php?id=".$arr[$n-1]["id"] ?>'><?php echo $arr[$n-1]['title']?> </a></h1>
            </div>
            <div class="boxnews-v">
                <div class="photo">
                    <img src="<?php echo ".".ltrim($arr[$n-2]['link_image'],".") ?>" alt="">
                </div>
                <h1 class="title"><a href='<?php echo "show-news.php?id=".$arr[$n-2]["id"] ?>'><?php echo $arr[$n-2]['title']?> </a></h1>
            </div>
            <div class="boxnews-v">
                <div class="photo">
                    <img src="<?php echo ".".ltrim($arr[$n-3]['link_image'],".") ?>" alt="">
                </div>
                <h1 class="title"><a href='<?php echo "show-news.php?id=".$arr[$n-3]["id"] ?>'><?php echo $arr[$n-3]['title']?> </a></h1>
            </div>
            <div class="boxnews-v">
                <div class="photo">
                    <img src="<?php echo ".".ltrim($arr[$n-4]['link_image'],".") ?>" alt="">
                </div>
                <h1 class="title"><a href='<?php echo "show-news.php?id=".$arr[$n-4]["id"] ?>'><?php echo $arr[$n-4]['title']?> </a></h1>
            </div>
            <div class="boxnews-v">
                <div class="photo">
                    <img src="<?php echo ".".ltrim($arr[$n-5]['link_image'],".") ?>" alt="">
                </div>
                <h1 class="title"><a href='<?php echo "show-news.php?id=".$arr[$n-5]["id"] ?>'><?php echo $arr[$n-5]['title']?> </a></h1>
            </div>
            <div class="boxnews-v">
                <div class="photo">
                    <img src="<?php echo ".".ltrim($arr[$n-6]['link_image'],".") ?>" alt="">
                </div>
                <h1 class="title"><a href='<?php echo "show-news.php?id=".$arr[$n-6]["id"] ?>'><?php echo $arr[$n-6]['title']?> </a></h1>
            </div>
            <div class="boxnews-v">
                <div class="photo">
                    <img src="<?php echo ".".ltrim($arr[$n-7]['link_image'],".") ?>" alt="">
                </div>
                <h1 class="title"><a href='<?php echo "show-news.php?id=".$arr[$n-7]["id"] ?>'><?php echo $arr[$n-7]['title']?> </a></h1>
            </div>
            <div class="boxnews-v">
                <div class="photo">
                    <img src="<?php echo ".".ltrim($arr[$n-8]['link_image'],".") ?>" alt="">
                </div>
                <h1 class="title"><a href='<?php echo "show-news.php?id=".$arr[$n-8]["id"] ?>'><?php echo $arr[$n-8]['title']?> </a></h1>
            </div>
        </div>
    </div>
<?php 
require "footer.php";
?> 