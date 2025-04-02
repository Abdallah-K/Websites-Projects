

<link rel="stylesheet" href="style/home_page/home_character_page.css"/>


<section id="characterPage">

    <div class="character_page_img_container">
        <img id="character_main_img" src="./respo/slider_bg/3.jpg">
        <div class="charcter_page_overlay">
            
            <div class="charcter_page_overlay_body">
                <div class="charcter_page_overlay_one">
                    <div class="charcter_page_overlay_one_container">
                        <h1>Dive Deep in to Naruto World: Explore all the data you need to know about Naruto Verse</h1>
                        <p>Step into the legendary world of Naruto, where shinobi battles, deep friendships, and powerful jutsu shape the fate of nations. Discover the history of the Hidden Villages, explore iconic characters like Naruto Uzumaki, Sasuke Uchiha, and Itachi, and unravel the mysteries behind powerful techniques such as the Sharingan, Rasengan, and Sage Mode. Whether you're a seasoned fan or a newcomer, this is your ultimate guide to everything Naruto!</p>
                        <a class="charcter_page_overlay_one_container_link" href="characters_page.php">Explore</a>
                    </div>

                </div>
                <div class="charcter_page_overlay_two">
                    <div class="charcter_page_overlay_two_container">
                        <div class="charcter_page_overlay_two_container_imgs"><img src="./respo/slider_bg/1.jpg"></div>
                        <div class="charcter_page_overlay_two_container_imgs"><img src="./respo/slider_bg/2.jpg"></div>
                        <div class="charcter_page_overlay_two_container_imgs"><img src="./respo/slider_bg/3.jpg"></div>
                        <div class="charcter_page_overlay_two_container_imgs"><img src="./respo/slider_bg/4.jpg"></div>

                    </div>
                </div>
            </div>

            <div class="charcter_page_overlay_footer">

            </div>

        </div>
    </div>

</section>

<script>

    $(".charcter_page_overlay_two_container_imgs").click(function() {
        var imgSrc = $(this).find("img").attr("src");
        $("#character_main_img").attr("src",imgSrc)
    });

</script>


