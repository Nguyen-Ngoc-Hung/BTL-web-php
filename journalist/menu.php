<?php 
$name = $_SESSION['name'];
$avatar = $_SESSION['avatar'];
$id = $_SESSION['idj'];
?> 

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Snews</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="pending-post.php">Bài viết chờ duyệt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create-post.php">Thêm bài viết</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="refuse-post.php">Bài viết bị từ chối</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="person">
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      <?php echo $name;?>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="change-pwd.php">Đổi mật khẩu</a></li>
        <li><a class="dropdown-item" href="log-out.php">Đăng xuất</a></li>
      </ul>
    </div>
    <div class="avatar"></div>
</div>
</nav>

