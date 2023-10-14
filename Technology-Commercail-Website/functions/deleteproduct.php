<?php

include("../connect.php");
$id = $_GET['id'];
$sql = "DELETE from products where id='$id'";
$result = mysqli_query($con,$sql);
header("location:../Listproducts.php");



?>