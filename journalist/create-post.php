<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết</title>
</head>
<body>
    <?php 
    if(isset($_GET['noti'])){
        $noti = $_GET['noti'];
        echo '<script>alert("'.$noti.'");</script>';
    }
    ?> 
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
        <button>Thêm</button>
    </form>
</body>
</html>