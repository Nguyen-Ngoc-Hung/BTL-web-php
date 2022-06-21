<?php 
session_start();
if(!isset($_SESSION['idj'])){
    header("location: ./index.php");
    exit();
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Đổi mật khẩu</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-4">
                <h1>Đổi mật khẩu</h1>
                <form action="process-change-pwd.php" method="post">
                    <p>Mật khẩu cũ</p>
                    <input type="password" name="password" class="form-control">
                    <p>Mật khẩu mới</p>
                    <input type="password" name="new-password" id="new-password" class="form-control">
                    <p>Xác nhận mật khẩu</p>
                    <input type="password" id="cf-password" class="form-control">
                    <input type="submit" style="display: none" id="submit">
                </form>
                <button onclick="check()" class="btn btn-success">Xác nhận</button>
            </div>
            <div class="col">
            </div>
        </div>
</div>
    <script>
        function check(){
            if(document.getElementById("new-password").value==document.getElementById("cf-password").value && document.getElementById("cf-password").value != "" ){
                document.getElementById("submit").click();
            }
            else{
                alert("Hai mật khẩu mới phải trùng nhau!");
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>