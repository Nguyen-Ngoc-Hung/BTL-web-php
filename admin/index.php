<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    Giao diện trang admin
    <?php 
    if(isset($_GET['noti'])){
        $noti = $_GET['noti'];
        echo "<p style='color: red;'>".$noti."</p>";
    }
    ?> 
    <div class="container">
        <div class="row">
            <div class="col">
                </div>
            <div class="col-4">
                    <form action="process-login.php" method="POST" >
                    <caption><h2>Đăng nhập</h2></caption>
                    <?php 
                    require "../login.php";
                    ?> 
                    <button class="btn btn-success">Đăng nhập</button>
                    <a href="registration-form.php">Đăng ký</a>
                    <br>
                    <a href="">Quên mật khẩu</a>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>