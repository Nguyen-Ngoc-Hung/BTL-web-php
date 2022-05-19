
<div class="account">
    <p>Xin chào <b><?php echo $_SESSION['name'];?> </b> </p> <a href="change-pwd.php">Đổi mật khẩu</a>
</div>
<ul>Menu
    <li><a href="home.php">Trang chủ</a></li>
    <li><a href="pending-post.php">Duyệt bài</a></li>
    <li><a href="journalist-management.php">Quản lý nhà báo nhà báo</a></li>
    <li <?php if($_SESSION['role'] !="root")echo "style='display: none'"?> ><a href="admin-management.php">Quản lý quản trị viên</a></li>
</ul>