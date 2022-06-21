<?php
session_start();
$id = $_POST['id'];
$title = $_POST['title'];
$summary = $_POST['summary'];
$content = $_POST['content'];
$fileImage = $_FILES['fileImage'];
$date = date("Y-m-d");

require "../connect-db.php";
$sql = "SELECT `id`, `title`, `summary`, `link_image`, `content`, `arthur`, `date`, `views` FROM `news` WHERE `id`='$id'";
    $result = ($conn->query($sql))->fetch_assoc();
    
    $link_image = $result['link_image'];
//Lưu ảnh

move_uploaded_file($fileImage['tmp_name'],$link_image);

//Thêm bài viết vào database
$sql = "UPDATE `news` SET `title`='$title',`summary`='$summary',`content`='$content',`date`='$date',`approved`=0 WHERE id=$id";
$conn->query($sql);
if ($conn -> query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: home.php?noti=Sửa thành công");




