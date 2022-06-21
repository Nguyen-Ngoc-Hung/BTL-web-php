<?php 
$id=$_GET['id'];
$title = $_GET['title'];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <style>
        a,a:hover{
            color: black;
            text-decoration: none;
        }
    </style>
    <button class="btn btn-secondary"><a href="home.php">Quay lại</a></button>
    
    <div class="center">
        <?php require "../news.php"?> 
        <div>
        <button class="btn btn-success"><a href="process-approve-post.php?id=<?php echo $id?>&ctrl=approved">Duyệt</a></button>
        <button class="btn btn-danger"><a href="process-approve-post.php?id=<?php echo $id?>&ctrl=delete">Xoá</a></button>
        </div>
        <form action="cancel.php" style="width:50%" method=GET>
            <input type="hidden" value="<?php echo $id?>" name="id">
            <textarea name="cancel" id="" cols="30" rows="10" class="form-control" style="margin: 30px 0px;"></textarea>
            <button class="btn btn-secondary">Từ chối</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>