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
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    
    <div class="center">
        <?php require "../news.php"?> 
        <div>
        <button><a href="process-delete-news.php?id=<?php echo $id?>">Gỡ bài</a></button>
        </div>
    </div>
</body>
</html>