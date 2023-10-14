<?php

include("connect.php");

$sql = "SELECT * FROM cart";
$result = mysqli_query($con,$sql);



$order_array = array();


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/Listcart.css"/>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <title>TechShop</title>
</head>
<body>
    <section id="ListCartPage">
        <?php include("navbar.php")?>
        <div class="listcart">
            <div class="listform">
                <div class="listmotion">
                    <div class="listheader">
                        <div class="listsection">
                            <h1>Product</h1>
                        </div>
                        <div class="listsection">
                            <h1>Name</h1>
                        </div>
                        <div class="listsection">
                            <h1>Price</h1>
                        </div>
                        <div class="listsection">
                            <h1>Qunatity</h1>
                        </div>
                        <div class="listsection">
                            <h1>Total</h1>
                        </div>
                        <div class="listsection">
                            <h1><?=mysqli_num_rows($result)?></h1>
                        </div>
                    </div>
                    <div class="listcard">
                    <?php
                        if(mysqli_num_rows($result)>0){
                            while($cartpro = mysqli_fetch_assoc($result)):
                    ?>
                        <div class="listcartdata">
                            <div class="listcartsection">
                                <?php $fullcart = "uploads/".$cartpro['image']?>
                                <img src="<?=$fullcart?>">
                            </div>
                            <div class="listcartsection">
                                <h2><?=$cartpro['name']?></h2>
                            </div>
                            <div class="listcartsection">
                                <h2><?=$cartpro['price']?> $</h2>
                            </div>
                            <div class="listcartsection">
                                <h2><?=$cartpro['quantity']?></h2>
                            </div>
                            <div class="listcartsection">
                                <?php $tot = $cartpro['quantity']*$cartpro['price'] ?>
                                <h2><?=$tot?> $</h2>
                                <?php $order_array[] = $tot?>
                            </div>
                            <div class="listcartsection">
                                <a href="./functions/deletecart.php?id=<?=$cartpro['id']?>">Remove</a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        }else{
                    ?>
                        <div class="nopro">
                            <h2>No Products available..</h2>
                        </div>
                    <?php
                        };
                    ?>
                    </div>
                </div>
            </div>
            <div class="order">
                <div class="orderbox">
                    <div class="ordertitle">
                        <h2>Total</h2>
                    </div>
                    <div class="ordernow">
                        <h3><?=array_sum($order_array)?>$</h3>
                        <button>Order</button>
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