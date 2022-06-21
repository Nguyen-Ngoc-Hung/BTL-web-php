<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script type="text/javascript" src="tinymce/js/tinymce/jquery.tinymce.min.js"></script>
    <script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <title>Thêm bài viết</title>
</head>
<body>
    <?php 
    session_start();
    if(!isset($_SESSION['idj'])){
        header("location: ./index.php");
        exit();
    }
    if(isset($_GET['noti'])){
        $noti = $_GET['noti'];
        echo '<script>alert("'.$noti.'");</script>';
    }
    ?> 
    <button type="button" class="btn btn-secondary"><a href="home.php">Quay lại</a></button>
    <b>Thêm bài viết</b>
    <form action="process-create-post.php" method="POST" enctype="multipart/form-data">
        <div style="margin: auto; width: 75%">
            <p>Tiêu đề</p>
            <input type="text" name="title" style="width:100%; height: 40px">
            <p>Nội dung tóm tắt</p>
            <textarea name="summary" id="" cols="30" rows="10"style="width:100%"></textarea>
            <p>Ảnh</p>
            <input type="file" name="fileImage" style="width:100%" id="anh">
            <p>Nội dung</p>
            <textarea name="content" id="" cols="100" rows="30" style="width:100%"></textarea>
        </div>
        <button class="btn btn-success btn-lg" style="margin: auto;display: block; margin-bottom:100px">Thêm</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>