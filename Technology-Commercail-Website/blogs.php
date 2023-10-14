<?php
include("connect.php");


$sql = "SELECT * FROM blogsdata";
$result = mysqli_query($con,$sql);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <link rel="stylesheet" href="./styles/blogs.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>TechShop</title>
</head>
<body>
    <section id="blogpage">
        <?php include("navbar.php")?>
        <div class="blogsec">
            <div class="bloglist">
                <div class="blogtitle">
                    <div class="blog-back">
                        <h2>Our Daily Blogs</h2>
                    </div>
                </div>
                <div class="blogappend">
                    <?php
                        while($blogs = mysqli_fetch_assoc($result)):
                    
                    ?>

                        <div class="blogcard">
                            <div class="blogimg">
                                <?php $full = "blogsimg/".$blogs['blogimg']?>
                                <img src="<?=$full?>">
                            </div>
                            <div class="blogdata">
                                <div class="section-one">
                                    <h3><?=$blogs['blogtitle']?></h3>
                                    <p><?=$blogs['blogdesc']?></p>
                                    <a href="./readblog.php?id=<?=$blogs['id']?>">Read More</a>
                                </div>
                                <div class="section-two">
                                    <h3><?=$blogs['username']?></h3>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                    ?>

                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php")?>




    <script src="./app.js"></script>
</body>
</html>