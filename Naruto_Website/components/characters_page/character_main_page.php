
<link rel="stylesheet" href="style/characters_page/character_main_page.css"/>



<section id="characterPage">

    <div class="character_header">
        <div class="character_header_logo">
            <div class="character_header_logo_container">
                <img src="respo/logo.png">
            </div>
        </div>
        <div class="character_header_nav">
            <a href="index.php">Home</a>
            <a href="menu_page.php">Menu</a>
            <a href="legend_page.php">Legends</a>
            <a href="anime_page.php">Anime</a>
            <a href="manga_page.php">Manga</a>
            <a href="tailed_beasts_page.php">Tailed Beasts</a>
            <a href="villages_page.php">Villages</a>
        </div>

    </div>
    <div class="character_body">
        <div class="character_body_container_search_bar">
            <div class="character_search_bar_box">
                <input type="text" placeholder="Enter the character name.....">
                <button>Search</button>
            </div>
        </div>
        <div class="character_body_container_cards">
            

    
        </div>
    </div>


</section>



<script>

    function request_naruto_character(url_api){
        html_character_card = ``;  
        $.ajax({
                url: url_api,
                method: 'GET',
                dataType: "json",
                success: function(response) {
                    data = response['characters'];
                    console.log(data);
                    
                    $.each(data, function(key, value) {
                        html_character_card += `            
                        <div class="charcater_card">
                            <img src="${value['images'][0]}">
                            <div class="charcater_card_overlay">
                                <div class="charcater_card_overlay_name">
                                    <a href="character_information.php?character_id=${value["id"]}">${value['name']}</a>
                                </div>
                            </div>
                        </div>`;
                    });

                    $(".character_body_container_cards").html(html_character_card);
                }
            });
    }

    request_naruto_character(`https://dattebayo-api.onrender.com/characters`)

    $(".character_search_bar_box button").click(function(){
        var inputVal = $(".character_search_bar_box input").val();
        if (inputVal == ""){
            request_naruto_character(`https://dattebayo-api.onrender.com/characters`)
        }
        else{
            var narut_character_api_input = `https://dattebayo-api.onrender.com/characters?name=${inputVal}`
            request_naruto_character(narut_character_api_input)
        }
    })


    $(".character_search_bar_box input").keydown(function(event){
        if (event.key === "Enter") {
            var inputVal = $(".character_search_bar_box input").val();
            if (inputVal == "") {
                request_naruto_character(`https://dattebayo-api.onrender.com/characters`)
            }
            else {
                var narut_character_api_input = `https://dattebayo-api.onrender.com/characters?name=${inputVal}`
                request_naruto_character(narut_character_api_input)
            }
        }
    });


</script>