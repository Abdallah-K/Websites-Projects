
<?php
if(isset($_GET['character_id'])){
    $character_id = $_GET['character_id'];
}
?>

<link rel="stylesheet" href="style/characters_page/character_information.css"/>

<section id="characterInformation">
    <div class="character_information_header">
        <div class="character_information_header_logo">
            <div class="character_information_header_logo_container">
                <img src="respo/logo.png">
            </div>
        </div>
        <div class="character_information_header_nav">
            <a href="index.php">Home</a>
            <a href="menu_page.php">Menu</a>
            <a href="legend_page.php">Legends</a>
            <a href="anime_page.php">Anime</a>
            <a href="manga_page.php">Manga</a>
            <a href="tailed_beasts_page.php">Tailed Beasts</a>
            <a href="villages_page.php">Villages</a>
        </div>
    </div>
    <div class="character_information_body">

    </div>

</section>


<script>

    $(document).ready(function () {
        let html_character_inforation_card = "";
        $.ajax({
            url: `https://dattebayo-api.onrender.com/characters/${<?php echo $character_id ?>}`,
            method: "GET",
            dataType: "json",
            success: function (response) {
                var character_name = response["name"];
                var character_images = response["images"];
                var character_debut = response["debut"];
                var character_family = response["family"];
                var character_jutsu = response["jutsu"];
                var character_natureType = response["natureType"];
                var character_personal = response["personal"];
                var character_rank = response["rank"];
                var character_tools = response["tools"];
                var character_voiceActors= response["voiceActors"];
                let debut_content = "";
                let family_content = "";
                let jutsu_content = "";
                let natureType_content = "";
                let personal_content = "";
                let rank_content = "";
                let tools_content = "";
                let voiceActors_content = "";
                
                $.each(character_debut, function (key, value) {
                    debut_content += `<p><strong>${key}:&nbsp;</strong> ${value}</p>`;
                });
                $.each(character_family, function (key, value) {
                    family_content += `<p><strong>${key}:&nbsp;</strong> ${value}</p>`;
                });
                $.each(character_jutsu,function(key,value){
                    jutsu_content += `<p><strong>${value}</strong></p>`;
                })
                $.each(character_natureType,function(key,value){
                    natureType_content += `<p><strong>${value}</strong></p>`;
                })
                $.each(character_personal,function(key,value){
                    if (Array.isArray(value)) {
                        personal_content += `<h4>${key}:</h4>`;
                        $.each(value, function (index, item) {
                            personal_content += `<li>${item}</li>`;
                        });
                    } else if (typeof value == "object" && value !== null){
                        personal_content += `<h4>${key}:</h4>`;
                        $.each(value, function (subKey, subValue) {
                            personal_content += `<li><strong>${subKey}</strong>: ${subValue}</li>`;
                        });
                    }else{
                        personal_content += `<h4>${key}:</h4><li>${value}</li>`;
                    }
                })
                $.each(character_rank,function(key,value){
                    if (Array.isArray(value)) {
                        rank_content += `<h4>${key}:</h4>`;
                        $.each(value, function (index, item) {
                            rank_content += `<li>${item}</li>`;
                        });
                    } else if (typeof value == "object" && value !== null){
                        rank_content += `<h4>${key}:</h4>`;
                        $.each(value, function (subKey, subValue) {
                            rank_content += `<li><strong>${subKey}</strong>: ${subValue}</li>`;
                        });
                    }else{
                        rank_content += `<h4>${key}:</h4><li>${value}</li>`;
                    }
                })
                $.each(character_tools,function(key,value){
                    tools_content += `<p><strong>${value}</strong></p>`
                })
                $.each(character_voiceActors,function(key,value){
                    if (Array.isArray(value)) {
                        voiceActors_content += `<h4>${key}:</h4>`;
                        $.each(value, function (index, item) {
                            voiceActors_content += `<li>${item}</li>`;
                        });
                    } else if (typeof value == "object" && value !== null){
                        voiceActors_content += `<h4>${key}:</h4>`;
                        $.each(value, function (subKey, subValue) {
                            voiceActors_content += `<li><strong>${subKey}</strong>: ${subValue}</li>`;
                        });
                    }else{
                        voiceActors_content += `<h4>${key}:</h4><li>${value}</li>`;
                    }
                })
    
                html_character_inforation_card = `
                <div class="character_information_body_card">
                    <div class="character_information_body_card_img_section">
                        <div class="character_information_body_card_img_section_header">
                            <h1>${character_name}</h1>
                        </div>
                        <div class="character_information_body_card_img_section_img_container">
                            <div class="character_information_body_card_img_section_img_container_card">
                                <img src=${character_images[0]}>
                            </div>
                            <div class="character_information_body_card_img_section_img_container_card">
                                <img src=${character_images[1]}>
                            </div>
                        </div>
                    </div>
                    <div class="character_information_body_card_data_section">
                        <div class="character_information_body_card_data_section_header">
                            <div class="header_navs_links" data-index="1">Debut</div>
                            <div class="header_navs_links" data-index="2">Family</div>
                            <div class="header_navs_links" data-index="3">jutsu</div>
                            <div class="header_navs_links" data-index="4">Nature Type</div>
                            <div class="header_navs_links" data-index="5">Personal</div>
                            <div class="header_navs_links" data-index="6">Rank</div>
                            <div class="header_navs_links" data-index="7">Tools</div>
                            <div class="header_navs_links" data-index="8">Voice Actros</div>
                        </div>
                        <div class="character_information_body_card_data_section_data">
                            <div id="content1" class="content-div"> ${debut_content}</div>
                            <div id="content2" class="content-div">${family_content}</div>
                            <div id="content3" class="content-div">${jutsu_content}</div>
                            <div id="content4" class="content-div">${natureType_content}</div>
                            <div id="content5" class="content-div">${personal_content}</div>
                            <div id="content6" class="content-div">${rank_content}</div>
                            <div id="content7" class="content-div">${tools_content}</div>
                            <div id="content8" class="content-div">${voiceActors_content}</div>
                        </div>
                    </div>
                </div>`;

                $(".character_information_body").html(html_character_inforation_card);

                $(".content-div").hide();  
                $("#content1").show();  
            }
        });

        $(document).on("click", ".header_navs_links", function () {
            let index = $(this).data("index"); 
            $(".content-div").hide();
            $("#content" + index).fadeIn(); 
        });

    });


</script>  