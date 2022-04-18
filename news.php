<?php 
    require "../connect-db.php";
    $sql = "SELECT `id`, `title`, `summary`, `link_image`, `content`, `arthur`, `date`, `views` FROM `news` WHERE `id`='$id'";
    $result = ($conn->query($sql))->fetch_assoc();
    
    $summary = $result['summary'];
    $link_image = $result['link_image'];
    $content = explode(chr(10),$result['content']);
    $id_arthur = $result['arthur'];
    $date = $result['date'];
    $views = $result['views'];
    
    $sql = "SELECT `name` FROM `jounalists` WHERE `id` = '$id_arthur'";
    $rs = ($conn->query($sql))->fetch_assoc();
    $arthur = $rs['name'];
?> 
    <div class="news-details">
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
                echo "<p>". $para. "</p>";
            }
            ?>
        </div>
        <div class="date">
            <span class="arthur">Tác giả: <?php echo $arthur?> </span>
            <span class="views"><?php echo $date?> </span>
            <span class="views">Số lượt xem: <?php echo $views?> </span>
        </div>
    </div>