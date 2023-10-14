<?php

include_once "./config.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/styles/login/login.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <div class="login_page">

        <div class="login_card">
            
            <div class="login_card_one">
                
                <div class="login_card_data">
                    <img id="homeimg" src="views/images/login/three.jpg">
                </div>
                <div class="login_card_button">
                    <button id="btnone"></button>
                    <button id="btntwo"></button>
                    <button id="btnthree"></button>
                </div>

            </div>        

            <div class="login_card_two">

                <div class="login_title">
                    <h1>DataFace</h1>
                </div>
                <div class="login_body">

                    <div class="login_form">
                        <form id="formdata">
                            <input type="text" id="username" placeholder="Enter Username....">
                            <input type="password" id="password" placeholder="Enter password..">
                            <button type="submit">Login</button>
                        </form>
                    </div>
                    <div class="login_link">
                        <h5>Don't have account? <a href="<?=$url."/register.php"?>">Register Now!</a></h5>
                    </div>

                </div>

            </div>
            
        
        </div>
    
    </div>
</body>
</html>




<script>

    $(function(){


        $("#formdata").submit(function(e){
            e.preventDefault();
            $.post("Classes/PostModel.php",{
                action:"select",
                username :$("#username").val(),
                password:$("#password").val(),
            },function(data){
                data = $.parseJSON(data);
                if (data.status == "Success"){
                    window.location="./dash.php";
                }else{
                    alert("Wrong account")
                }
                
            })
        })







     
        $("#btnone").click(function(){
            $("#homeimg").attr("src","views/images/login/one.jpg")
        })

        $("#btntwo").click(function(){
            $("#homeimg").attr("src","views/images/login/two.jpg")
        })

        $("#btnthree").click(function(){
            $("#homeimg").attr("src","views/images/login/three.jpg")
        })



    })


</script>