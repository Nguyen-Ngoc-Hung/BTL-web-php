<?php 
if(!isset($_SESSION['id'])){
    header("location: ./index.php");
    exit();
}
?> 

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Snews</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="pending-post.php">Duyệt bài</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="journalist-management.php">Quản lý nhà báo</a>
        </li>
        <li class="nav-item" <?php if($_SESSION['role'] !="root")echo "style='display: none'"?> >
          <a class="nav-link active" aria-current="page" href="admin-management.php">Quản lý quản trị viên</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="person">
      <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['name'];?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="change-pwd.php">Đổi mật khẩu</a></li>
              <li><a class="dropdown-item" href="log-out.php">Đăng xuất</a></li>
            </ul>
      </div>
  </div>
</nav>
