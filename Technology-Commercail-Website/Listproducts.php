<?php
include("connect.php");
session_start();
$username = $_SESSION['username'];
if(!isset($username)){
    header("location:./login.php");
}

$sql = "SELECT * FROM products";
$result = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/listproducts.css"/>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <title>TechShop</title>
</head>
<body>
    <?php include("navbar.php")?>
    <section id="listpage">
        <?php include("navdash.php")?>
        <div class="listdelete">
            <div class="listit">
                <div class="navlist">
                    <div class="listheaders">
                        <h2>Product</h2>
                    </div>
                    <div class="listheaders">
                        <h2>Name</h2>
                    </div>
                    <div class="listheaders">
                        <h2>Descritpion</h2>
                    </div>
                    <div class="listheaders">
                        <h2>Price</h2>
                    </div>
                    <div class="listheaders">
                        <h2>Category</h2>
                    </div>
                    <div class="listheaders">
                        <h2>Action</h2>
                    </div>
                </div>
                <div class="deletepro">
                    <?php
                        if(mysqli_num_rows($result)>0){
                            while($products = mysqli_fetch_assoc($result)): 
                    ?>
                        <div class="deletecards">
                            <div class="deletesections">
                                <div class="deleteimg">
                                    <?php $fullimage="uploads/".$products['image']?>
                                    <img src="<?=$fullimage?>">
                                </div>
                            </div>
                            <div class="deletesections">
                                <div class="deleltename">
                                    <h2><?=$products['name']?></h2>
                                </div>
                            </div>
                            <div class="deletesections">
                                <div class="deletedesc">
                                    <p><?=$products['description']?></p>
                                </div>
                            </div>
                            <div class="deletesections">
                                <div class="deleteprice">
                                    <h2><?=$products['price']?></h2>
                                </div>
                            </div>
                            <div class="deletesections">
                                <div class="deletecat">
                                    <h2><?=$products['category']?></h2>
                                </div>
                            </div>
                            <div class="deletesections">
                                <div class="deleteaction">
                                    <a href="./functions/deleteproduct.php?id=<?=$products['id']?>">Delete</a>
                                </div>
                            </div>
                        </div>
                    
                    <?php
                        endwhile;
                        }
                        else{
                    ?>
                        <div class="sorryMessage">
                            <h1>No products Available</h1>
                        </div>

                    <?php
                        };
                    ?>


                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php")?>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./app.js"></script>
</body>
</html>