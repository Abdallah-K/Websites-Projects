<?php
$baseurl = $_SERVER['PHP_SELF'];
$splits = explode("/",$baseurl);
$removed = array_pop($splits);
$url = join("/",$splits);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/plotly.js/2.18.0/plotly.min.js" integrity="sha512-PoMMvyLyczW2qxm9yDSat2j+lGHL9iuLBmbOZWZMIgH9+3mThWt8+pbZHwM4LPCU1xBvd1VcRQFF+CkocURY6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./style.css"/>
    <link rel="stylesheet" href="./styletwo.css"/>
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <h1>HistoHype</h1>
    </div>
    <div class="header">
        <h2>Image Histogram Generator</h2>
        <p>
        This free online tool generates image histograms for red, green, blue, and greyscale values. Histograms can be generated for multiple images at once in batch.
        </p>
    </div>
    <div class="img_btn_section">
        <div class="img_section">
            <div class="img_big_container">
                <div class="img_container">
                    <img src="" id="img_display">
                </div>
            </div>
            <div class="img_info">
                
            </div>
        </div>
        <div class="btn_section">
            <form id="xform">
                <input type="file" name="img_file" id="upload_img" class="hide_upload">
                <label for="upload_img">Upload your Image</label>
                <input type="submit" id="style_input" value="Upload">
            </form>
            <div class="btn_section_two">
                <button id="draw_histo">Draw histogram Gray</button>
                <button id="draw_histo_rgb">Draw histogram RGB</button>
            </div>
        </div>
    </div>
    <div class="drawing_section">
        <div class="drawing_title">
            <h1>GrayScale Histogram</h1>
        </div>
        <div class="drawing_btn">
            <button id="toggle_label_gray">Lables</button>
        </div>
        <div class="drawing_display">
                <div id="plot_gray"></div>
        </div>
    </div>
    <div class="drawing_section">
        <div class="drawing_title">
            <h1>RGB Histogram</h1>
        </div>
        <div class="drawing_btn">
            <button id="toggle_label_rgb">Lables</button>
        </div>
        <div class="drawing_display">
                <div id="plot_rgb"></div>
        </div>
    </div>
    <div class="footer">
        <h1> &copy; Abdallah Kharoby </h1>
    </div>

    

</body>
</html>


<script>


    function draw_histogram_gray(histo_array,layout_gray){
        var trace = {
            y: histo_array,
            line: {color: 'gray'},
            type: "scatter"
        };
        var data = [trace];
        Plotly.newPlot("plot_gray", data,layout_gray);
    }

    function draw_histogram_rgb(histo_array_r,histo_array_g,histo_array_b,layout_rgb){
        var trace_one = {
            y: histo_array_r,
            line: {color: 'red'},
            name: 'R',
            type: "scatter"
        };
        var trace_two = {
            y: histo_array_g,
            line: {color: 'green'},
            name: 'G',
            type: "scatter"
        };
        var trace_three = {
            y: histo_array_b,
            line: {color: 'blue'},
            name: 'B',
            type: "scatter"
        };
        var data_rgb = [trace_one,trace_two,trace_three];
        Plotly.newPlot("plot_rgb", data_rgb,layout_rgb);
    }


    $(function(){
        $("#xform").submit(function(event) {
            event.preventDefault();
            var img_resolution = new Image();
            var formData = new FormData(this);
            var file_data_name = $('#upload_img').prop('files')[0].name;
            var img_file_name = `images/${file_data_name}`;
            window.myvar = img_file_name;
            $.ajax({
                url: "uploadapi.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $(".img_info").empty();
                    $("#img_display").attr("src",img_file_name);
                    img_resolution.src = $("#img_display").attr("src");
                    img_resolution.onload = function() {
                        let p_h = document.createElement("p");
                        let p_w = document.createElement("p");
                        let p_name = document.createElement("p");
                        p_name.innerHTML = file_data_name
                        p_h.innerHTML = `Height: ${this.height}`
                        p_w.innerHTML = `Width: ${this.width}`
                        $(".img_info").append(p_name);
                        $(".img_info").append(p_h);
                        $(".img_info").append(p_w);
                    };
                }
                });
        });
        

        var layout_gray = {
            xaxis: {showticklabels: false},
            yaxis: {showticklabels: false},
            mode: "immediate"
        };
        var layout_rgb = {
            xaxis: {showticklabels: false},
            yaxis: {showticklabels: false},
            mode: "immediate"
        };

        $("#draw_histo").click(function(){
            var image_full_path = `C:\\xampp/htdocs/<?=$url?>/${window.myvar}`;
            $.get("http://127.0.0.1:5000/generate_histogram_gray",{img_path:`${image_full_path}`},function(data){
                    draw_histogram_gray($.parseJSON(data),layout_gray)
            })
        })

        $("#draw_histo_rgb").click(function(){
            var image_full_path = `C:\\xampp/htdocs/<?=$url?>/${window.myvar}`;
            $.get("http://127.0.0.1:5000/generate_histogram_rgb",{img_path:`${image_full_path}`},function(data){
                    const object_array = $.parseJSON(data);
                    draw_histogram_rgb(object_array[0],object_array[1],object_array[2],layout_rgb)
            })
        })

        $("#toggle_label_gray").on("click",function(){
            var update = {};
            update.xaxis = {showticklabels : !layout_gray.xaxis.showticklabels};
            update.yaxis = {showticklabels : !layout_gray.yaxis.showticklabels};
            Plotly.update('plot_gray',{},update);
        })
        $("#toggle_label_rgb").on("click",function(){
            var update_rgb = {};
            update_rgb.xaxis = {showticklabels : !layout_rgb.xaxis.showticklabels};
            update_rgb.yaxis = {showticklabels : !layout_rgb.yaxis.showticklabels};
            Plotly.update('plot_rgb',{},update_rgb);
        })

    })

</script>