


<link rel="stylesheet" href="style/home_page/home_elements_page.php.css"/>


<section id="elementsPage">

    <div class="element_data_section">

        <div class="element_data_section_info">
            <h1>Main Chakra Nature: Understanding Elemental Affinities in the Naruto Universe</h1>
            <h2>Fire</h2>
            <p>The Fire Release (Katon) style is known for its powerful, destructive flames. Used by the Uchiha Clan, techniques like the Fireball Jutsu symbolize passion and intensity. Fire jutsu burn fiercely and require strong chakra control. They often overpower weaker elements like Wind but struggle against Water. This nature embodies the will to never give up.</p>
            <div class="jutsu_imgs_contaier">

                <div class="jutsu_imgs_contaier_card">
                    <img src="./respo/chakra/jutsu/fire_1.jpg">
                </div>
                <div class="jutsu_imgs_contaier_card">
                    <img src="./respo/chakra/jutsu/fire_2.jpg">
                </div>
                <div class="jutsu_imgs_contaier_card">
                    <img src="./respo/chakra/jutsu/fire_3.jpg">
                </div>

            </div>
        </div>

    </div>

    <div class="element_figure_section">

        <div class="element_figure_section_card">
            
            <div class="element_figure_section_card_navbar">
                <div class="element_figure_section_card_navbar_btn"><img src="./respo/chakra/fire.png"></div>
                <div class="element_figure_section_card_navbar_btn"><img src="./respo/chakra/water.png"></div>
                <div class="element_figure_section_card_navbar_btn"><img src="./respo/chakra/wind.png"></div>
                <div class="element_figure_section_card_navbar_btn"><img src="./respo/chakra/light.png"></div>
                <div class="element_figure_section_card_navbar_btn"><img src="./respo/chakra/earth.png"></div>
          
            </div>
            <div class="element_figure_section_card_img">
                <div class="element_figure_section_card_img_container">
                    <img src="./respo/chakra/chars/fire.jpg">
                </div>

            </div>

        </div>

    </div>
    
    <svg class="wave_top" viewBox="0 0 1440 250">
        <path fill="#2a2b50" d="M0,224L80,192C160,160,320,96,480,74.7C640,53,800,75,960,96C1120,117,1280,139,1360,149.3L1440,160V320H0Z"></path>
    </svg>


    <svg class="wave" viewBox="0 0 1440 250">
        <path fill="#2a2b50" d="M0,224L80,192C160,160,320,96,480,74.7C640,53,800,75,960,96C1120,117,1280,139,1360,149.3L1440,160V320H0Z"></path>
    </svg>


</section>


<script>

    const chakraNatures = {
        fire: "The Fire Release (Katon) style is known for its powerful, destructive flames. Used by the Uchiha Clan, techniques like the Fireball Jutsu symbolize passion and intensity. Fire jutsu burn fiercely and require strong chakra control. They often overpower weaker elements like Wind but struggle against Water. This nature embodies the will to never give up.",
        water: "The Water Release (Suiton) style is fluid and adaptable, allowing users to manipulate water in versatile ways. Known for defensive and offensive techniques, it is used heavily in Kirigakure. Masters like Kisame wield massive water constructs. Water can flow around obstacles and extinguish Fire, showing its calming yet powerful nature.",
        wind: "The Wind Release (Fūton) style is the rarest chakra nature in Konoha, known for its sharp, cutting power. Naruto and Asuma use it to enhance attacks, making them precise and deadly. Wind techniques slice through defenses and excel in ranged combat. They boost weapons like kunai, making them lethal. Wind is unpredictable, symbolizing freedom.",
        light: "The Lightning Release (Raiton) style is fast and piercing, used by shinobi like Kakashi and the Raikage. It enhances speed, reflexes, and destructive power. Techniques like Chidori and Raikiri can cut through almost anything. Lightning is best against Earth but weak to Wind. It represents power and swift justice in battle.",
        earth: "The Earth Release (Doton) style grants immense durability and control over terrain. It’s used for defensive walls, offensive spikes, and underground movement. Shinobi like Ōnoki master its versatility, shaping the battlefield. Earth counters Water but is weak against Lightning. This nature symbolizes resilience and unwavering strength."
    };


    $(".element_figure_section_card_navbar_btn").click(function() {
        var imgSrc = $(this).find("img").attr("src"); 
        var img_src_split = imgSrc.split("/").pop().split(".")[0]; 
        var char_main_path = `./respo/chakra/chars/${img_src_split}.jpg`; 
        $(".element_figure_section_card_img_container img").attr("src", char_main_path);
        $(".element_data_section_info h2").html(img_src_split.toUpperCase());
        $(".element_data_section_info p").html(chakraNatures[img_src_split]);
        $(".jutsu_imgs_contaier_card img").each(function(index) {
            var jutsu_main_path = `./respo/chakra/jutsu/${img_src_split}_${index + 1}.jpg`;
            $(this).attr("src", jutsu_main_path);
        });
    });


</script>




