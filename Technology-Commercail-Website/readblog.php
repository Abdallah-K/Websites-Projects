<?php

include("connect.php");
$id = $_GET['id'];


$sql = "SELECT * from blogsdata WHERE id='$id'";
$result = mysqli_query($con,$sql);

$readblog = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/readblog.css"/>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <title>TechShop</title>
</head>
<body>
    <section id="Readpage">
        <?php include("navbar.php")?>
        <div class="readform">

            <div class="readcard">
                <div class="readimg">
                    <?php $full = "blogsimg/".$readblog['blogimg']?>
                    <img src="<?=$full?>">
                </div>
                <div class="readdata">
                    <div class="readtitle">
                        <h2><?=$readblog['blogtitle']?></h2>
                    </div>
                    <div class="readdesc">
                        <h3><?=$readblog['blogdesc']?></h3>
                    </div>
                    <div class="readtext">
                        <p><?=$readblog['blogtext']?></p>
                    </div>
                    <div class="readuser">
                        <p><?=$readblog['username']?></p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <?php include("footer.php")?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./app.js"></script>
</body>
</html>