<?php
include("connect.php");


$sql = "SELECT * FROM products ORDER BY RAND() LIMIT 6";
$result = mysqli_query($con,$sql);

$sqlslider = "SELECT * from products";
$res = mysqli_query($con,$sqlslider);

$featuredsql = "SELECT * FROM products ORDER BY RAND() LIMIT 1";
$feares = mysqli_query($con,$featuredsql);

$featuredproduct = mysqli_fetch_assoc($feares);

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <link rel="stylesheet" href="./styles/style.css"/>
    <link rel="stylesheet" href="./styles/styleslide.css"/>
    <link rel="stylesheet" href="./styles/stylefeatured.css"/>
    <link rel="stylesheet" href="./packages/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TechShop</title>
</head>
<body>
    <section id="Home">
        <?php include("navbar.php");?>
        <div class="home-slider">
            <div class="home-img">
                <img src="./img/test.jpg">
            </div>
            <div class="home-data">
                <div class="home-info">
                    <h1>Check out the most advanced technology products in the world right now!</h1>
                    <a href="./gallery.php">Shop Now &nbsp; <i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section id="Products">
        <div class="products-card">
            <div class="products-title">
                <div class="products-arrival">
                    <h2>New-Arrivals</h2>
                </div>
            </div>
            <div class="products-list">
                <?php
                    while($products = mysqli_fetch_assoc($result)):

                ?>
                    <div class="arrival-card">
                        <div class="arrival-img">
                            <?php $full = "uploads/".$products['image']?>
                            <img src="<?=$full?>">
                            <div class="arrival-overview">
                                <a href="./cart.php?id=<?=$products['id']?>"><button class="cart"><i class="fa-solid fa-cart-shopping"></i></button></a>
                                <button class="like"><i class="fa-solid fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="arrival-data">
                            <div class="arrival-name">
                                <h2><?=$products['name']?></h2>
                            </div>
                            <div class="arrival-price">
                                <div class="arrival-prices">
                                    <p><?=$products['price']?></p>
                                    <h5>500000$</h5>
                                </div>
                                <div class="arrival-rates">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                ?>

            </div>
        </div>
    </section>
    <section id="Products-Show">
        <div class="products-box">
            <div class="slide-title">
                <div class="slide-back">
                    <h2>Products</h2>
                </div>
            </div>
            <div class="slider-motion">
                <div class="slider-box">
                    <div class="slide-buttons">
                        <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
                    </div>
                    <div class="slider">
                        <?php
                            while($sliderproducts = mysqli_fetch_assoc($res)):
                        
                        ?>
                            <div class="slider-card">
                                <div class="slider-img">
                                    <?php $fullimgslider = "uploads/".$sliderproducts['image']?>
                                    <img src="<?=$fullimgslider?>">
                                </div>
                                <div class="slider-data">
                                    <div class="slider-pro-title">
                                        <h2><?=$sliderproducts['name']?></h2>
                                    </div>
                                    <div class="slider-pro-btn">
                                        <div class="slider-prices">
                                            <p><?=$sliderproducts['price']?></p>
                                            <h5>10000000$</h5>
                                        </div>
                                        <div class="addtocart">
                                            <a href="./cart.php?id=<?=$sliderproducts['id']?>"><i class="fa-solid fa-cart-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            endwhile;
                        ?>

                    </div>
                    <div class="slide-buttons">
                        <button class="nxt"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Featured">
        <div class="featured-box">
            <div class="featured-title">
                <div class="featured-back">
                    <h2>Featured-products</h2>
                </div>
            </div>
            <div class="featured-list">
                <div class="featured-card">
                    <div class="featured-img">
                        <img src="<?="uploads/".$featuredproduct['image']?>">
                    </div>
                    <div class="featured-data">
                        <div class="featured-name">
                            <h1><?=$featuredproduct['name']?></h1>
                            <div class="featured-rates">
                                <div class="featured-rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(500+) Reviews</p>
                            </div>
                        </div>
                        <div class="featured-btn">
                            <div class="featured-lorem">
                                <p><?=$featuredproduct['description']?></p>
                            </div>
                            <div class="featured-button">
                                <p><?=$featuredproduct['price']?>$</p>
                                <a href="./cart.php?id=<?=$featuredproduct['id']?>">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php")?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./app.js"></script>
    <script src="./packages/splide.min.js"></script>
</body>
</html>