<?php
session_start();

$title = $_POST['title'];
$summary = $_POST['summary'];
$content = $_POST['content'];
$fileImage = $_FILES['fileImage'];
$date = date("Y-m-d");
$arthur = $_SESSION['id'];

//Lưu ảnh
$target_dir = "../photos/";
$file_extension = explode("/",$fileImage['type'])[1];
$path_file = $target_dir . time() . "." . $file_extension;
move_uploaded_file($fileImage['tmp_name'],$path_file);

//Thêm bài viết vào database
require "../connect-db.php";
$sql = "INSERT INTO `news`(`title`, `summary`, `link_image`, `content` ,`arthur`, `date`) VALUES ('$title', '$summary', '$path_file','$content', '$arthur','$date')";
if ($conn -> query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location: home.php?noti=Thêm thành công");




