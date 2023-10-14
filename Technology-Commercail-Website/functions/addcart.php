<?php

include("../connect.php");

$id = $_POST['id'];
$quantity = $_POST['quantity'];

if(empty($quantity)){
    $quantity = 1;
}


$sql = "SELECT * FROM products WHERE id = '$id'";
$result = mysqli_query($con,$sql);


$cartdata = mysqli_fetch_assoc($result);
$image = $cartdata['image'];
$name = $cartdata['name'];
$price = $cartdata['price'];

// // $quantity = $cartdata['quantity'];

$insertsql = "insert into cart (id,image,name,price,quantity) values ('$id','$image','$name','$price','$quantity')";
$new = mysqli_query($con,$insertsql);
header("location:../cart.php?id=$id");





?>