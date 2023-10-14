<?php

$id = $_GET['id'];

include("../connect.php");

$sql = "DELETE FROM cart WHERE id = '$id'";
$res = mysqli_query($con,$sql);

header("location:../Listcart.php");





?>