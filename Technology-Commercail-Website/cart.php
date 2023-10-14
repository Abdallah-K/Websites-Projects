<?php

$id = $_GET['id'];
include("connect.php");

$sql = "SELECT * FROM products WHERE id ='$id'";
$result = mysqli_query($con,$sql);

$cartproduct = mysqli_fetch_assoc($result);

$type = $cartproduct['category'];


$newsql = "SELECT * FROM products WHERE category ='$type'";
$newresult = mysqli_query($con,$newsql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/cart.css"/>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TechShop</title>
</head>
<body>
    <section id="cartpage">
        <?php include("navbar.php")?>
        <div class="cartsection">
            <div class="cartproduct">
                <div class="cartinfo">
                    <div class="cartback">
                        <a href="./gallery.php">Back</a>
                    </div>
                    <div class="cartcard">
                        <div class="cartform">
                            <form action="./functions/addcart.php" method="POST" enctype="multipart/form-data">
                                <div class="cartimg">
                                    <img src="<?="uploads/".$cartproduct['image']?>">
                                </div>
                                <div class="cartdata">
                                    <div class="cartname">
                                        <h2><?=$cartproduct['name']?></h2>
                                    </div>
                                    <div class="cartdesc">
                                        <p><?=$cartproduct['description']?></p>
                                    </div>
                                    <div class="cartprice">
                                        <h1><?=$cartproduct['price']?>$</h1>
                                        <input type="hidden" name="id" value="<?=$cartproduct['id']?>">
                                        
                                    </div>
                                    <div class="cartqunatity">
                                        <input type="number" min="1" name="quantity">
                                    </div>
                                    <div class="cartbtn">
                                        <button>Add to Cart&nbsp;<i class="fa-solid fa-cart-plus"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cartmore">
                <div class="cartslider">
                    <div class="carttitle">
                        <div class="cartbacktitle">
                            <h2>Similar products</h2>
                        </div>
                    </div>
                    <div class="cartslidersection">
                        <div class="cartbtns">
                            <button id="prevnext"><i class="fa-solid fa-arrow-left"></i></button>
                        </div>
                        <div class="cartmotion">
                        <?php
                            while($cartslider = mysqli_fetch_assoc($newresult)):
                        ?>
                            <div class="cartcardmotion">
                                <div class="imgsec">
                                    <img src="<?="uploads/".$cartslider['image']?>">
                                </div>
                                <div class="cartcarddata">
                                    <h2><?=$cartslider['name']?></h2>
                                    <h3><?=$cartslider['price']?>$</h3>
                                    <a href="./cart.php?id=<?=$cartslider['id']?>">Cart</a>
                                </div>
                            </div>
                        <?php
                            endwhile;
                        ?>
                        </div>
                        <div class="cartbtns">
                            <button id="motionnext"><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
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