<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/fontawesome/css/all.min.css">
    <title>Snews-Kênh thông tin giới trẻ</title>
</head>
<body>
    <div class="logo" id="top">
        <img src="./photos/logo-BTL.jpg" alt="logo">
    </div>
    
    <div class="nav">
        <div class="list">
            <a href="index.php">Trang chủ</a>
            <a href="#footer">Giới thiệu</a>
            <a href="#footer">Liên hệ</a>
        </div>
        <div class="search">
            <form action="search.php" method="get">
                <input type="text" placeholder="Tìm kiếm" name="search">
                <i class="fas fa-search" onclick="search()"></i>
                <button id="butSearch">submit</button>
            </form>
            <script>
                function search(){
                    document.getElementById("butSearch").click();
                }
            </script>
        </div>
    </div>
