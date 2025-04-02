

<link rel="stylesheet" href="style/manga_page/manga_main_page.css"/>

<section id="mangaPage">

    <div class="manga_page_body">
        <img src="./respo/home/manga_bg.png">
        <div class="manga_page_body_overlay">
            
            <div class="manga_page_body_overlay_header">
                <div class="manga_page_body_overlay_header_logo_container">
                    <div class="manga_page_body_overlay_header_logo">
                        <img src="./respo/logo.png">
                    </div>
                </div>
                <div class="manga_page_body_overlay_header_nav">
                    <a href="index.php">Home</a>
                    <a href="menu_page.php">Menu</a>
                    <a href="legend_page.php">Legends</a>
                    <a href="characters_page.php">Characters</a>
                    <a href="anime_page.php">Anime</a>
                    <a href="tailed_beasts_page.php">Tailed Beasts</a>
                    <a href="villages_page.php">Villages</a>
                </div>

            </div>

            <div class="manga_page_body_overlay_body">

                <div class="manga_page_body_overlay_body_card">


                </div>

                <div class="manga_page_body_overlay_body_slider">
                    <input type="range" min="0" max="100" value="0" class="manga_slider">
                </div>

            </div>

        </div>
    </div>
</section>


<script>

$(document).ready(function () {

    let naruto_part_one_manga_array = Array.from({ length: 27 }, (_, i) => `./respo/manga/naruto/${i + 1}.jpg`);
    let naruto_part_two_manga_array = Array.from({ length: 45 }, (_, i) => `./respo/manga/sh/${i + 1}.jpg`);
    let boruto_part_one_manga_array = Array.from({ length: 20 }, (_, i) => `./respo/manga/bo/${i + 1}.jpg`);

    let all_manga_array = [...naruto_part_one_manga_array, ...naruto_part_two_manga_array, ...boruto_part_one_manga_array];

    let manga_page_body_overlay_body_card = $(".manga_page_body_overlay_body_card");

    all_manga_array.forEach(volumes => {
        let manga_card_html = `
            <div class="manga_card">
                <img src="${volumes}" alt="">
            </div>`;
        manga_page_body_overlay_body_card.append(manga_card_html);
    });

    let container = $(".manga_page_body_overlay_body_card");
    let slider = $(".manga_slider");

    function updateSliderMax() {
        let maxScroll = container[0].scrollWidth - container.width();
        slider.attr("max", maxScroll);
    }

    slider.on("input", function () {
        container.css("transform", `translateX(-${$(this).val()}px)`);
    });

    setTimeout(updateSliderMax, 500);

});



</script>

<!-- 
<script>

$(document).ready(function () {

    let naruto_part_one_manga_array = Array.from({ length: 27 }, (_, i) => `./respo/manga/naruto/${i + 1}.jpg`);
    let naruto_part_two_manga_array = Array.from({ length: 45 }, (_, i) => `./respo/manga/sh/${i + 1}.jpg`);
    let boruto_part_one_manga_array = Array.from({ length: 14 }, (_, i) => `./respo/manga/bo/${i + 1}.jpg`);

    let all_manga_array = [...naruto_part_one_manga_array, ...naruto_part_two_manga_array,... boruto_part_one_manga_array];

    naruto_part_one_manga_html = ""
    all_manga_array.forEach(volumes=>{
        naruto_part_one_manga_html = `
            <div class="manga_card">
                <img src="${volumes}" alt="">
            </div>`
            $(".manga_page_body_overlay_body_card_container").append(naruto_part_one_manga_html)
    })


    let container = $(".manga_page_body_overlay_body_card_container");
    let slider = $(".manga_slider");
    function updateSliderMax() {
        let maxScroll = container[0].scrollWidth - container.width();
        slider.attr("max", maxScroll);
    }
    slider.on("input", function () {
        container.css("transform", `translateX(-${$(this).val()}px)`);
    });
    setTimeout(updateSliderMax, 500);

    
});

</script> -->