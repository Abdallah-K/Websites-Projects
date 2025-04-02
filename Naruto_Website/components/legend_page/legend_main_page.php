
<link rel="stylesheet" href="style/legend_page/legend_main_page.css"/>

<section id="legendPage">

    <div class="legend_page_header">
        <div class="legend_page_header_logo_container">
            <div class="legend_page_header_logo">
                <img src="./respo/logo.png">
            </div>
        </div>
        <div class="legend_page_header_nav">
            <a href="index.php">Home</a>
            <a href="menu_page.php">Menu</a>
            <a href="characters_page.php">Characters</a>
            <a href="anime_page.php">Anime</a>
            <a href="manga_page.php">Manga</a>
            <a href="tailed_beasts_page.php">Tailed Beasts</a>
            <a href="villages_page.php">Villages</a>
        </div>

    </div>
    <div class="legend_page_body">

    </div>

</section>


<script>

    let chars_legends_array = [
        {
            background_img : "./respo/legends/naruto/bg.jpg",
            character_img : "./respo/legends/naruto/char.png",
            title : "Naruto Uzumaki",
            paragraph : "Naruto Uzumaki is the main protagonist of the Naruto series, a determined ninja who dreams of becoming the Hokage. Born as the host of the Nine-Tails, he faced loneliness and rejection but never gave up. With his unbreakable spirit, he mastered powerful jutsu like the Rasengan and Sage Mode. Under Jiraiya’s guidance, he grew stronger, eventually controlling Kurama’s chakra. Through perseverance and friendship, he changed many lives, including Sasuke’s. Naruto’s journey from an outcast to the Seventh Hokage showcases his unwavering belief in hard work, loyalty, and the will to protect his loved ones and his village",
            img_one : "./respo/legends/naruto/1.jpg",
            img_two : "./respo/legends/naruto/2.jpg",
            img_three : "./respo/legends/naruto/3.jpg",
            img_four : "./respo/legends/naruto/4.jpg",
        },
        {
            background_img : "./respo/legends/sasuke/bg.jpg",
            character_img : "./respo/legends/sasuke/char.png",
            title : "Sasuke Uchiha",
            paragraph : "Sasuke Uchiha is one of the last surviving members of the Uchiha clan in the Naruto series. Born with immense talent, he initially seeks revenge against his brother Itachi for the clan's massacre. As he grows stronger, he masters the Sharingan, later awakening the Rinnegan. Once a loyal member of Team 7, he leaves Konoha in pursuit of power but eventually finds his own path. After learning the truth about Itachi, Sasuke shifts from vengeance to redemption, becoming a protector of the village while maintaining a complex yet deep bond with Naruto Uzumaki",
            img_one : "./respo/legends/sasuke/1.jpg",
            img_two : "./respo/legends/sasuke/2.jpg",
            img_three : "./respo/legends/sasuke/3.jpg",
            img_four : "./respo/legends/sasuke/4.jpg",
        },
        {
            background_img : "./respo/legends/kakashi/bg.jpg",
            character_img : "./respo/legends/kakashi/char.png",
            title : "Kakashi Hatake",
            paragraph : "Kakashi Hatake, known as the Copy Ninja, is one of Konoha’s most skilled and intelligent shinobi. A former ANBU and the leader of Team 7, he is respected for his mastery of the Sharingan, gifted to him by Obito Uchiha. Despite his calm and aloof demeanor, Kakashi deeply cares for his comrades. He teaches Naruto, Sasuke, and Sakura valuable lessons about teamwork and perseverance. Over time, he becomes the Sixth Hokage, guiding the village with wisdom and strength, leaving behind a legacy of leadership, loyalty, and self-sacrifice",
            img_one : "./respo/legends/kakashi/1.jpg",
            img_two : "./respo/legends/kakashi/2.jpg",
            img_three : "./respo/legends/kakashi/3.jpg",
            img_four : "./respo/legends/kakashi/4.jpg",
        },
        {
            background_img : "./respo/legends/hashirama/bg.jpg",
            character_img : "./respo/legends/hashirama/char.png",
            title : "Hashirama Senju",
            paragraph : "Hashirama Senju, the First Hokage, was the founder of Konohagakure and one of history’s most powerful shinobi. Known as the God of Shinobi, he possessed unparalleled strength and mastery over Wood Release, allowing him to control tailed beasts. His dream was to bring lasting peace to the ninja world, forming an alliance with his rival, Madara Uchiha. Despite their friendship, their ideals clashed, leading to Madara’s rebellion. Hashirama’s legacy shaped the village’s future, and his will of fire inspired generations of shinobi, including Naruto Uzumaki",
            img_one : "./respo/legends/hashirama/1.jpg",
            img_two : "./respo/legends/hashirama/2.jpg",
            img_three : "./respo/legends/hashirama/3.jpg",
            img_four : "./respo/legends/hashirama/4.jpg",
        },
        {
            background_img : "./respo/legends/itachi/bg.jpg",
            character_img : "./respo/legends/itachi/char.png",
            title : "Itachi Uchiha",
            paragraph : "Itachi Uchiha was a prodigy of the Uchiha clan, known for his intelligence, strength, and mastery of the Sharingan. To protect Konoha from a civil war, he made the painful decision to annihilate his own clan, sparing only his younger brother, Sasuke. Branded a traitor, he joined the Akatsuki, working from the shadows to maintain peace. Despite being seen as a villain, Itachi’s true intentions were revealed later, showing his deep love for his brother and his sacrifice for the village. His story remains one of the most tragic yet inspiring in the Naruto series",
            img_one : "./respo/legends/itachi/1.jpg",
            img_two : "./respo/legends/itachi/2.jpg",
            img_three : "./respo/legends/itachi/3.jpg",
            img_four : "./respo/legends/itachi/4.jpg",
        },
        {
            background_img : "./respo/legends/obito/bg.jpg",
            character_img : "./respo/legends/obito/char.png",
            title : "Obito Uchiha",
            paragraph : "Obito Uchiha was once a kind-hearted Konoha ninja who dreamed of becoming Hokage. During the Third Great Ninja War, he was presumed dead after being crushed by a boulder, but he was secretly saved by Madara Uchiha. Witnessing the death of his love, Rin, Obito fell into darkness, adopting Madara’s ideology and becoming the mastermind behind the Akatsuki. Under the alias Tobi, he orchestrated major events, leading to the Fourth Great Ninja War. However, Naruto’s unwavering belief in redemption helped Obito return to the light, ultimately sacrificing himself to protect the world he once sought to control",
            img_one : "./respo/legends/obito/1.jpg",
            img_two : "./respo/legends/obito/2.jpg",
            img_three : "./respo/legends/obito/3.jpg",
            img_four : "./respo/legends/obito/4.jpg",
        },
        {
            background_img : "./respo/legends/madara/bg.jpg",
            character_img : "./respo/legends/madara/char.png",
            title : "Madara Uchiha",
            paragraph : "Madara Uchiha was one of the most powerful and feared shinobi in history, co-founder of Konohagakure alongside Hashirama Senju. A visionary leader and warrior, he sought to end endless conflict but became disillusioned with the shinobi world. After faking his death, he orchestrated events from the shadows, ultimately reviving himself to wage the Fourth Great Ninja War. Wielding the Eternal Mangekyō Sharingan and Rinnegan, he was nearly unstoppable. Despite his strength, his dreams were ultimately undone, and he realized too late the value of true peace. Madara remains one of the greatest antagonists in the Naruto series",
            img_one : "./respo/legends/madara/1.jpg",
            img_two : "./respo/legends/madara/2.jpg",
            img_three : "./respo/legends/madara/3.jpg",
            img_four : "./respo/legends/madara/4.jpg",
        },
    ]
    
    char_legend_html = ""
    chars_legends_array.forEach(chars_card =>{
        char_legend_html += `
                <div class="legend_page_body_card">
                    <img src = "${chars_card.background_img}">
                    <div class="legend_page_body_card_overlay">
                        <div class="legend_page_body_card_overlay_section_one">
                            <img src = "${chars_card.character_img}">
                        </div>
                        <div class="legend_page_body_card_overlay_section_two">

                            <div class="legend_page_body_card_title_container">
                                <h1>${chars_card.title}</h1>
                                <p>${chars_card.paragraph}</p>
                            </div>
                            <div class="legend_page_body_card_data_container">
                                <div class="legend_page_body_card_data_container_card">
                                    <div class="legend_page_body_card_data_container_card_img"><img src="${chars_card.img_one}"></div>
                                    <div class="legend_page_body_card_data_container_card_img"><img src="${chars_card.img_two}"></div>
                                    <div class="legend_page_body_card_data_container_card_img"><img src="${chars_card.img_three}"></div>
                                    <div class="legend_page_body_card_data_container_card_img"><img src="${chars_card.img_four}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`
    })
    $(".legend_page_body").append(char_legend_html)



</script>

