


<section id="faceReco">
    <div class="facereco_btn">
        <button id="facereco_web">Webcam</button>
        <input type="file" id="facereco_upload">
        <label id="generate_label" for="facereco_upload">Upload Video</label>
        <button id="facereco_sub">Play Video</button>

    </div>
    <div class="facereco_border">
        <div class="facereco_camera">
            <img src="" id="facereco_camera_src">
        </div>
    </div>
</section>


<script>
    $(function(){
        var location = window.location.pathname;
        location = location.split("/").slice(0, -1).join('/');
       
        
        $("#facereco_sub").click(function(){
            var global_path = `http://localhost${location}`;
            var api_path = `C:/xampp/htdocs${location}/views/dataset/${"<?=$user?>"}/${"<?=$user?>"}.yml`;
            var file_data = $('#facereco_upload').prop('files')[0];   
            var file_data_name = $('#facereco_upload').prop('files')[0].name;   
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
                    $("#facereco_camera_src").attr("src",`http://127.0.0.1:5000/recognition?path=${path_video}&yml=${api_path}&name=<?=$user?>`);
                }
            });
        })


        $("#facereco_web").click(function(){
            var api_path = `C:/xampp/htdocs${location}/views/dataset/${"<?=$user?>"}/${"<?=$user?>"}.yml`;
            $("#facereco_camera_src").attr("src",`http://127.0.0.1:5000/recognition?path=0&yml=${api_path}&name=<?=$user?>`)
        })


    })

</script>