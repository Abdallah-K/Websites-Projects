



<section id="facedetupload">
    <div class="facedetbtn">
        <button id="faceDet_web">Webcam</button>
        <input type="file" id="faceDet_Upload">
        <label for="faceDet_Upload">Upload Video</label>
        <button id="DetSubmit">Play</button>
    </div>
    <div class="facedetvideo">
        <div class="facedet_camera">
            <img src="" id="facedet_camera_src">
        </div>
    </div>

</section>


<script>
    $(function(){
        var location = window.location.pathname;
        location = location.split("/").slice(0, -1).join('/');
       
        
        $("#DetSubmit").click(function(){
            var global_path = `http://localhost${location}`;
            var api_path = `C:/xampp/htdocs${location}/views/dataset/${"<?=$user?>"}`;
            var file_data = $('#faceDet_Upload').prop('files')[0];   
            var file_data_name = $('#faceDet_Upload').prop('files')[0].name;   
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
                    $("#facedet_camera_src").attr("src",`http://127.0.0.1:5000/detection?path=${path_video}`);
                }
            });
        })


        $("#faceDet_web").click(function(){
            $("#facedet_camera_src").attr("src",`http://127.0.0.1:5000/detection?path=0`)
        })


    })

</script>