<?php
session_start();
if(!isset($_SESSION['id'])){
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
    <title>Document</title>
</head>
<body>
    <?php 
    require "menu.php";
    ?> 
<h1>
    Thêm quản trị viên
</h1>
    <p style="color: red;">
        <?php 
        if(isset($_GET['noti'])){
            echo $_GET['noti'];
        }
        ?> 
    </p>
    <form action="process-add-admin.php" method="POST">
        <table>
            <tr>
                <th>Tên:</th>
                <td><input type="text" name="name" id="name" ></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" id="email"  ></td>
            </tr>
            <tr>
                <th>Mật khẩu:</th>
                <td><input type="password" name="password" id="pw"></td>
            </tr>
            <tr>
                <th>Xác nhận mật khẩu: </th>
                <td><input type="password" id="rpw"></td>
            </tr>
            <tr style="display:none">
                <td colspan="2"><input type="submit" id="submit"></td>
            </tr>
        </table>
    </form>
    <button class="button" onclick="check()">Thêm</button>
    <style>
        th{
            text-align: left;
            width: 200px;
        }
        table{
            margin: auto;
        }
        .button {
            display: block;
            margin: auto;
        }
    </style>

    <script>
        function check(){
            var pw = document.getElementById("pw");
            var rpw = document.getElementById("rpw");
            var name = document.getElementById('name');
            var email = document.getElementById("email");
            if(name.value =="" || email.value =="" || pw ==""){
                alert("Phải điền đây dủ!!!");
                return;
            }
            if(pw.value==rpw.value){
                document.getElementById("submit").click();
            }else{
                pw.value = "";
                rpw.value='';
                alert("Hai mật khẩu phải trùng nhau!!!")
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>