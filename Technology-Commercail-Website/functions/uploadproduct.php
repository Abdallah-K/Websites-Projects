<?php

include("../connect.php");

$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];
$category = $_POST['category'];
$file_name = $_FILES['upload']['name'];
$file_tmp = $_FILES['upload']['tmp_name'];

if(isset($_POST['add'])){
    if(!empty($file_name)){
        $sql = "insert into products (name,description,price,image,category,quantity) values ('$name','$desc','$price','$file_name','$category',1)";
        $result = mysqli_query($con,$sql);
        move_uploaded_file($file_tmp,"../uploads/$file_name");
        echo '<script>
            alert("Product added");       
        </script>';
        header("location:../dashboard.php");
    }

    
}




?>