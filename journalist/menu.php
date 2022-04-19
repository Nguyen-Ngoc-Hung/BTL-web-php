<?php 
$name = $_SESSION['name'];
$avatar = $_SESSION['avatar'];
$id = $_SESSION['id'];
?> 
<div class="person">
    <p><?php echo $name;?> </p>
    <div class="avatar"></div>
</div>
<ul>Menu
    <li><a href="home.php">Trang chủ</a></li>
    <li><a href="pending-post.php">Bài viết chờ duyệt</a></li>
    <li><a href="create-post.php">Thêm bài viết</a></li>
</ul>