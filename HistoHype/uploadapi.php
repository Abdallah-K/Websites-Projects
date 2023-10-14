<?php


if(!empty($_FILES['img_file']['name'])){
    $file_name = $_FILES['img_file']['name'];
    $file_tmp = $_FILES['img_file']['tmp_name'];
    $target_dir = "images/${file_name}";
    move_uploaded_file($file_tmp,$target_dir);
    header("location:index.php");
}



?>