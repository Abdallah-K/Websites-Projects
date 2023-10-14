<?php
include_once "./config.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/styles/register/register.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <section id="RegisterPage">

        <div class="register_card">

            <div class="register_card_one">
                <img src="views/images/register/three.png" id="regimg">
                <div class="register_btns">
                    <button id="onebtn"></button>
                    <button id="twobtn"></button>
                    <button id="threebtn"></button>
                </div>
            </div>

            <div class="register_card_two">
                
                <div class="register_title">
                    <h1>Create account</h1>
                </div>
                <div class="register_body">
                    <form id="Regform">
                        <input type="text" name="username" placeholder="Enter Username....">
                        <input type="password" name="password" placeholder="Enter password..">
                        <input type="password" name="confirmpassword" placeholder="Enter Confirmed password..">
                        <button type="submit">Register</button>
                    </form>
                    <div class="reglink">
                        <h5>Already have account? <a href="<?=$url."/home.php"?>">Login Now!</a></h5>
                    </div>
                </div>

            </div>

        </div>


    </section>
</body>
</html>


<script>

    $(function(){


        $("#Regform").submit(function(e){
            e.preventDefault();
            let formData = new FormData($("form")[0]);
            formData.append("action","insert");
            $.ajax({
                url:"Classes/PostModel.php",
                method:"post",
                data:formData,
                processData:false,
                contentType:false,
                success:function(data){
                    data = $.parseJSON(data);
                    alert(data.message);
                }
            })
        })
        





        $("#onebtn").click(function(){
            $("#regimg").attr("src","views/images/register/one.jpg")
        })
        $("#twobtn").click(function(){
            $("#regimg").attr("src","views/images/register/two.jpg")
        })
        $("#threebtn").click(function(){
            $("#regimg").attr("src","views/images/register/three.png")
        })


    })


</script>