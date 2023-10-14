<?php

session_start();

include("../connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from userdata where username='$username' and password='$password' ";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    $_SESSION['username'] = $username;
    header("location:../dashboard.php");
}
else{
    echo '<script>
        alert("Password do not match");
    </script>';
    header("location:../login.php");
}



?>