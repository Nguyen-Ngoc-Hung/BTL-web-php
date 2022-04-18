<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$avatar = $_FILES['avatar'];
$id_card_photo = $_FILES['id-card-photo'];
$jounalist_card_phot = $_FILES['jounalist-card-photo'];
$intro = $_POST['intro'];

$dir_avatar = "";
$dir_id_card_photo = "";
$dir_jounalist_card_phot = "";

$target_dir = "info/";
//Hàm upload ảnh
function uploadImage($file,$id,$option){
    $basename = "";
    $extention = explode(".",basename($file['name']))[1];
    if($option == 1){
        $basename = "avatar";
    }
    elseif($option == 2){
        $basename = "id-card-photo";
    }
    elseif($option ==3){
        $basename = "journalist-card-photo";
    }

    $target_file = 'info/' . $id . "-" .$basename . "." . $extention;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST)) {
    $check = getimagesize($file["tmp_name"]);
    if($check !== false) {
            $uploadOk = 1;
    } else {
            echo "File is not an image.";
            $uploadOk = 0;
    }
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $file["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
    }
    }
    return $target_file;
}

// Kiểm tra đã tồn tại email trong DB chưa
require "../connect-db.php";
$sql = 'SELECT MAX(`id`) FROM `jounalists` WHERE 1';
$result = $conn->query($sql);
$id = ($result->fetch_assoc())["MAX(`id`)"];
$id = $id + 1;
$sql = 'SELECT * FROM `jounalists` WHERE `email`="' . $email . '"';
$result = $conn->query($sql);
if($result->num_rows != 0){
    $conn->close();
    header('location: registration-form.php?error='.$email);
    exit;
}

$dir_avatar = uploadImage($avatar,$id,1);
$dir_id_card_photo = uploadImage($id_card_photo,$id,2);
$dir_jounalist_card_phot = uploadImage($jounalist_card_phot,$id,3);

$sql = "INSERT INTO `jounalists`(`id`, `name`, `email`, `password`, `avatar`, `id_card_photo`, `journalist_card_photo`, `intro`) VALUES ('$id','$name','$email','". $_POST['password'] . "','$dir_avatar','$dir_id_card_photo','$dir_jounalist_card_phot','$intro')";
$conn->query($sql);
$conn->close();
header("location:index.php?noti=Đăng kí thành công");


