<?php

include("connect.php");


$sql = "SELECT * FROM products";
$result = mysqli_query($con,$sql);


if(isset($_POST['search'])){
    $type = $_POST['types'];
    if($type != "All"){
        $sql = "SELECT * FROM products WHERE category = '$type'";
        $result = mysqli_query($con,$sql);
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/gallery.css"/>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TechShop</title>
</head>
<body>
    <section id="galleryPage">
        <?php include("navbar.php")?>
        <div class="gallerypro">
            <div class="gallerysection">
                <div class="gallerytitle">
                    <div class="galleryback">
                        <h2>Products Gallery</h2>
                    </div>
                </div>
                <div class="galleryform">
                    <div class="config">
                        <form action="./gallery.php" method="POST">
                            <select name="types">
                                <option>All</option>
                                <option>Laptop</option>
                                <option>Mobile</option>
                                <option>HeadPhones</option>
                            </select>
                            <button type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
                <div class="gallerylist">
                <?php
                    while($galleryproducts = mysqli_fetch_assoc($result)):
                ?>
                    <div class="gallerycard">
                        <div class="galleryimg">
                            <img src="<?="uploads/".$galleryproducts['image']?>"/>
                        </div>
                        <div class="gallerydata">
                            <div class="gallerysecone">
                                <h2><?=$galleryproducts['name']?></h2>
                            </div>
                            <div class="gallerysectwo">
                                <h3><?=$galleryproducts['price']?>$</h3>
                                <a href="./cart.php?id=<?=$galleryproducts['id']?>"><i class="fa-solid fa-cart-plus"></i></a>
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

 



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./app.js"></script>
</body>
</html>