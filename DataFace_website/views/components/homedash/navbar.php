<?php
include_once "./config.php";
session_start();
$user = $_SESSION['user'];
if(!isset($user)){
    header("location:./home.php");
}

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="navbar">
    <div class="nav_one">
        <h2>DataFace</h2>
    </div>
    <div class="nav_two">
        <h2><?=$user?></h2>
    </div>
    <div class="nav_three">
        <button id="navbtn"><i class="fa-solid fa-bars"></i></button>
    </div>
</div>
<div class="navlist">
    <div class="navdata">
        <div class="nav_box">
            <a href="<?=$url."/dash.php"?>"><i class="fa-solid fa-house"></i>&nbsp;Home</a>
        </div>
        <div class="nav_box">
            <a href="<?=$url."/lbph.php"?>"><i class="fa-solid fa-square-poll-vertical"></i>&nbsp;LBPH</a>
        </div>
        <div class="nav_box">
            <a href="<?=$url."/generate.php"?>"><i class="fa-solid fa-image"></i>&nbsp;Generate Image</a>
        </div>
        <div class="nav_box">
            <a href="<?=$url."/yaml.php"?>"><i class="fa-solid fa-database"></i>&nbsp;Create Yaml</a>
        </div>
        <div class="nav_box">
            <a href="<?=$url."/facedetection.php"?>"><i class="fa-sharp fa-solid fa-face-smile"></i>&nbsp;Face Detection</a>
        </div>
        <div class="nav_box">
            <a href="<?=$url."/facerecognition.php"?>"><i class="fa-sharp fa-solid fa-face-smile"></i></i>&nbsp;Face Recognition</a>
        </div>
        <div class="nav_box">
            <a href="./Classes/logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</a>
        </div>
    </div>
</div>



<script>

    $(function(){
        $("#navbtn").click(function(){
            $(".navdata").toggleClass("shownav");
        })
    })

</script>