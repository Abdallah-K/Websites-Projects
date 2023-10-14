

<section id="Selfie">
    <div class="generate_btn">
        <button id="webcam">Webcam</button>
        <input type="file" id="upload_generate">
        <label id="generate_label" for="upload_generate">Upload Video</label>
        <button id="Submit">Play Video</button>

    </div>
    <div class="generate_border">
        <div class="generate_camera">
            <img src="" id="generate_src">
        </div>
    </div>
</section>


<script>
    $(function(){
        var location = window.location.pathname;
        location = location.split("/").slice(0, -1).join('/');
       
        
        $("#Submit").click(function(){
            var global_path = `http://localhost${location}`;
            var api_path = `C:/xampp/htdocs${location}/views/dataset/${"<?=$user?>"}`;
            var file_data = $('#upload_generate').prop('files')[0];   
            var file_data_name = $('#upload_generate').prop('files')[0].name;   
            var form_data = new FormData(); 
            form_data.append('file', file_data);
            var path_video = `${global_path}/views/video/${file_data_name}`;
            window.myvar = path_video;
            $.ajax({
                url: `${global_path}/Classes/uploadvideo.php`, 
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(data){
                    alert(`${file_data_name} has been uploaded..`);
                    $("#generate_src").attr("src",`http://127.0.0.1:5000/generate?path=${path_video}&name=${api_path}`);
                }
            });
        })


        $("#webcam").click(function(){
            var api_path = `C:/xampp/htdocs${location}/views/dataset/${"<?=$user?>"}`;
            $("#generate_src").attr("src",`http://127.0.0.1:5000/generate?path=0&name=${api_path}`)
        })


    })

</script>