<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <style>
        th{
            text-align: left;
        }
        input{
            width: 100%;
        }
        table{
            margin: auto;
        }
        #bt-submit{
            padding: 10px 20px;
            width: auto;
            display: block;
            margin: auto;
        }
    </style>
    <?php 
    if(isset($_GET['error'])){
        $err = $_GET['error'];
        echo '<i style="color:red">Email <b>'.$err .'</b> đã tồn tại!!</i>';
    }
    ?> 
    <form action="process-registration-form.php" method="POST" enctype="multipart/form-data">
        <table>
            <caption>Đăng ký trở thành nhà báo</caption>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" id="email" ></td>
            </tr>
            <tr>
                <th>Họ tên:</th>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <th>Mật khẩu</th>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <th>Xác nhật mật khẩu</th>
                <td><input type="password" id="cf-password"></td>
            </tr>
            <tr>
                <th>Ảnh đại diện</th>
                <td><input type="file" name="avatar" id="avatar"></td>
            </tr>
            <tr>
                <th>Ảnh chụp CCCD (mặt trước) </th>
                <td><input type="file" name="id-card-photo" id="id-card-photo"></td>
            </tr>
            <tr>
                <th>Ảnh chụp thẻ nhà báo</th>
                <td><input type="file" name="jounalist-card-photo" id="jounalist-card-photo"></td>
            </tr>
            <tr>
                <th>Giới thiệu thêm</th>
                <td><textarea name="intro" id="intro" cols="30" rows="10" value="" onclick="test()"></textarea></td>
            </tr>
        </table>
        <button type="submit" id="bt-submit" style="display:none;" >Submit</button>
    </form>
    <button onclick="check()">Đăng kí</button>
    <script>
        function check(){
            if(document.getElementById('name').value =="" || document.getElementById('password').value=="" || document.getElementById('cf-password').value=="" || document.getElementById('id-card-photo').value=="" || document.getElementById('jounalist-card-photo').value=="")
            {
                alert("Những phần đánh dấu không được bỏ trống!!!");
                return;
            }
            if(document.getElementById('password').value != document.getElementById('cf-password').value ){
                alert("Hai mật khẩu phải trùng nhau!!!");
                return;
            }
            document.getElementById("bt-submit").click();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>