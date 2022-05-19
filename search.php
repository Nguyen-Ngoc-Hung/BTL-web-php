<?php
require "header.php";
require "./connect-db.php";
$key_word = &$_GET['search'];
?>
<div class="main">
    <div class="bottom-main">
        <?php 

        $sql = "SELECT `id`, `title`, `summary`, `link_image`, `content`, `arthur`, `date`, `views` FROM `news` WHERE title LIKE '%$key_word%'";
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