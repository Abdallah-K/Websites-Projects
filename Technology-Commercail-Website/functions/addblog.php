<?php
session_start();
$username = $_SESSION['username'];
include("../connect.php");

$blogtitle = $_POST['blogtitle'];
$blogdescription = $_POST['blogdescription'];
$blogtext = $_POST['blogtext'];
$file_name = $_FILES['uploadblog']['name'];
$file_tmp = $_FILES['uploadblog']['tmp_name'];


if(isset($_POST['add'])){
    if(!empty($file_name)){
        $sql = "insert into blogsdata (blogimg,blogtitle,blogdesc,username,blogtext) values ('$file_name','$blogtitle','$blogdescription','$username','$blogtext')";
        $result = mysqli_query($con,$sql);
        move_uploaded_file($file_tmp,"../blogsimg/$file_name");
        echo '<script>
            alert("Blog added");       
        </script>';
        header("location:../blogsmangment.php");
    }
    
}



?>
