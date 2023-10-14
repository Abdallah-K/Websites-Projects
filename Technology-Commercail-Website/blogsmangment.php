<?php

session_start();
$username = $_SESSION['username'];


if(!isset($username)){
    header("location:./login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/blogsmangment.css"/>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <title>TechShop</title>
</head>
<body>
    <?php include("navbar.php")?>
    <section id="blogsec">
        <?php include("navdash.php")?>
        <div class="blogform">
            <div class="blogsdata">
                <form action="./functions/addblog.php" method="POST" enctype="multipart/form-data">
                    <h2>Write Blog</h2>
                    <input type="file" name="uploadblog">
                    <input type="text" name="blogtitle" placeholder="Enter BLog title...">
                    <input type="text" name="blogdescription" placeholder="Enter Blog Description">
                    <textarea name="blogtext" cols="30" rows="10" placeholder="Write your Blog.."></textarea>
                    <button type="submit" name="add">Add</button>

                </form>
            </div>

        </div>

    </section>
    <?php include("footer.php")?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./app.js"></script>
</body>
</html>