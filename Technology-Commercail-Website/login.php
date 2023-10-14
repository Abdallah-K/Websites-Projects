<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navbar.css"/>
    <link rel="stylesheet" href="./styles/login.css"/>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TechShop</title>
</head>
<body>
    <?php include("navbar.php")?>
    <section id="loginpage">
        <div class="logincard">
            <div class="logindesign">
                <i class="fa-solid fa-user-large"></i>
            </div>
            <div class="loginform">
                <form action="./functions/userlogin.php" method="POST">
                    <h2><i class="fa-solid fa-user-lock"></i>&nbsp;User</h2>
                    <input type="text" name="username">
                    <input type="password" name="password">
                    <button type="submit">Login</button>
                </form>
            </div>

        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./app.js"></script>
</body>
</html>