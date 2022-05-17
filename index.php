<?php

require "header.php";
require "./connect-db.php";
$sql = 'SELECT * FROM `news` WHERE VIEWS = (SELECT MAX(views) FROM news)';
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$hot_img = ".".ltrim($row['link_image'],".");
?>

<div class="main">
    <div class="top-main">
        <div class="content">
            <div class="hot-news" style="background-image: url('<?php echo $hot_img ?>');">
                <h1><?php echo $row['title'] ?> </h1>
            </div>
        </div>
        <div class="catogory">
            <ul><p>Danh mục tin tức</p>
                <li><a href="">Tin nổi bật</a></li>
                <li><a href="">Chính trị</a></li>
                <li><a href="">Văn hoá</a></li>
                <li><a href="">Xã hội</a></li>
                <li><a href="">Thế giới</a></li>
                <li><a href="">Thể thao</a></li>
                <li><a href="">Du lịch</a></li>
            </ul>
        </div>
    </div>
    <div class="bottom-main">
        <?php 

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
        <div class="subnews-h">
            <div class="left">
                <?php 
                $page = 1;
                if(isset($_GET['page']))
                    $page = $_GET['page'];
                for($i=($page-1)*5+1;$i<=$page*5&&$i<=$n;++$i){
                ?>
                    <div class="boxnews-h">
                        <div class="photo">
                            <img src="<?php echo ".".ltrim($arr[$i-1]['link_image'],".") ?>" alt="">
                        </div>
                        <div class="title">
                            <h1><a href='<?php echo "show-news.php?id=".$arr[$i-1]["id"] ?>'><?php echo $arr[$i-1]['title']?> </a></h1>
                            <p><?php echo $arr[$n-1]['summary']?></p>
                        </div>
                    </div>
                <?php

                }
                ?> 
                <!-- Phân trang -->
                <div class="page">
                    Trang 
                    <?php 
                    for($i=1;$i<=($n/5+1);++$i){
                        echo '<a href="index.php?page='.($i).'"> '.$i.'</a>';
                    }
                    ?> 
                </div>
            </div>
            <div class="right">
                    <img src="./photos/ads.jpg" alt="banner-quang-cao">
            </div>
        </div>
    </div>
</div>
<?php 
require "footer.php";
?>