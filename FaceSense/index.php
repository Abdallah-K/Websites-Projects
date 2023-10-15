<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./style.css"/>
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar_one">
            <h1>FaceSense</h1>
        </div>
        <div class="navbar_two">
            <button id="start">Start</button>
            <button id="summary">Summary</button>
        </div>
    </div>
    <div class="sidenav">
        <div class="side_title">
            <h1>Summary</h1>
        </div>
        <div class="list_nav">

        </div>
    </div>

    <div class="data_section">
        <div class="data_processing">
            <div class="video_section">
                <img src="" id="video">
            </div>
            <div class="emoji_section">
                <div class="emoji_title">
                    <h1 id="emoji_title_text"></h1>
                </div>
                <div class="emoji_picture">
                    <div class="emoji_container">
                        <img id="emotion_face" src="">
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>
<div class="footer">
    <p> &copy; Abdallah kharoby</p>
</div>
</html>


<script>

    var array = [];
    
    function analyze(){
        var n = new Date();
        const ca = n.getSeconds();
        fetch(`python_api/data.txt?v=${ca}`)
        .then(response => response.text())
        .then(data =>{
            if (!array.includes(data)) {
                array.push(data);
            }
            $("#emoji_title_text").html(data);
            $("#emotion_face").attr("src",`emoji/${data}.png`);

            const now = new Date();
            const hoursAndMinutes = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();

            
            for (let i = 0; i < array.length; i++) {

                let div = document.createElement('div');
                div.id = "summary_data";
                let div_one = document.createElement('div');
                let div_two = document.createElement('div');
                let div_three = document.createElement('img');
                div_three.src = `emoji/${data}.png`;
                div_three.id = "summary_img"

                div.append(div_one);
                div.append(div_two);
                div.append(div_three);

                div_one.innerHTML = hoursAndMinutes
                div_two.innerHTML = array[i];

                $(".list_nav").append(div);
            }
        })

    }

    $(function(){
        
        setInterval(analyze,1000);

        $("#start").on("click",function(){
            $("#video").attr("src","http://127.0.0.1:5000/face_emotion")
        })

        $("#summary").on("click",()=>{
            $(".sidenav").toggleClass("opensidenav")
        })
        
       

    })


</script>
