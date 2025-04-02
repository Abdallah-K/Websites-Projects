

<link rel="stylesheet" href="style/menu_page/menu_main_page.css"/>

<section id="menuPage">

    <div class="menu_page_screen">
        <div class="menu_page_screen_container">
            <img src="respo/Village.jpg">
        </div>
    </div>
    <div class="menu_page_selection">
        <div class="menu_list">
            <ul>
                <li data-img="respo/main_menu/legend.jpg" data-link="legend_page.php">Legendary Characters</li>
                <li data-img="respo/main_menu/characters.jpg" data-link="characters_page.php">Characters</li>
                <li data-img="respo/main_menu/anime.jpg" data-link="anime_page.php">Anime Summary</li>
                <li data-img="respo/main_menu/manga_2.jpg" data-link="manga_page.php">Manga</li>
                <li data-img="respo/main_menu/bijuus_2.jpg" data-link="tailed_beasts_page.php">Tailed-Beasts</li>
                <li data-img="respo/main_menu/Village.jpg" data-link="villages_page.php">Villages</li>
                <li data-img="respo/main_menu/boruto_poster.jpg" data-link="boruto_page.php">Boruto</li>
            </ul>
        </div>

    </div>


</section>


<script>
    $(document).ready(function () {
        let $menuItems = $(".menu_list li");
        let $mainImage = $(".menu_page_screen_container img");
        let currentIndex = 0;

        function updateActive() {
            $menuItems.removeClass("active").eq(currentIndex).addClass("active");

            let newImgSrc = $menuItems.eq(currentIndex).data("img");
            $mainImage.addClass("change-effect").fadeOut(300, function () {
                $(this).attr("src", newImgSrc).fadeIn(300).removeClass("change-effect");
            });

            $menuItems.eq(currentIndex)[0].scrollIntoView({ behavior: "smooth", block: "center" });
        }

        updateActive();

        $(document).on("keydown", function (event) {
            if (event.key === "ArrowDown") {
                currentIndex = (currentIndex + 1) % $menuItems.length;
                updateActive();
            } else if (event.key === "ArrowUp") {
                currentIndex = (currentIndex - 1 + $menuItems.length) % $menuItems.length;
                updateActive();
            } else if (event.key === "Enter") {
                let link = $menuItems.eq(currentIndex).data("link");
                if (link) {
                    window.location.href = link; 
                }
            }
        });

        $menuItems.on("click", function () {
            currentIndex = $menuItems.index(this);
            updateActive();
            let link = $(this).data("link");
            if (link) {
                window.location.href = link; 
            }
        });
    });
</script>
