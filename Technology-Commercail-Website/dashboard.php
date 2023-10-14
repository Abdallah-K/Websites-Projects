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
    <link rel="stylesheet" href="./styles/navbar.css"/>
    <link rel="stylesheet" href="./styles/dash.css"/>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TechShop</title>
</head>
<body>
    <?php include("navbar.php")?>
    <section id="dashpage">
        <?php include("navdash.php")?>
        <div class="dashform">
            <div class="formcard">
                <form action="./functions/uploadproduct.php" method="POST" enctype="multipart/form-data">
                    <h2>Add Product</h2>
                    <input type="file" name="upload">
                    <input type="text" name="name" placeholder="Enter name of product ....">
                    <textarea name="desc" cols="30" rows="10" placeholder="Enter description.."></textarea>
                    <input type="number" name="price" placeholder="Enter price of the product..">
                    <select name="category">
                        <option>Laptop</option>
                        <option>Mobile</option>
                        <option>HeadPhones</option>
                    </select>
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