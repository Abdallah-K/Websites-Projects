


<link rel="stylesheet" href="style/boruto_page/boruto_characters_page.css"/>

<section id="borutoCharacter">

    <div class="boruto_character_header">
        <h1>Characters</h1>
    </div>
    <div class="boruto_character_body">


    </div>

</section>


<script>

    let boruto_char_array = [
        {
            "img":"./respo/boruto/boru_char.jpg",
            "title":"Boruto Uzumaki",
            "info":"Exiled and labeled a traitor, Boruto returns stronger, mastering the Jougan and Karma. Trained by Sasuke, he seeks to reclaim his identity and stop Kawaki. With newfound composure and power, he faces formidable threats while uncovering secrets about his origins and the Otsutsuki’s true influence on his fate"
        },
        {
            "img":"./respo/boruto/sarada_char.jpg",
            "title":"sarada Uchiha",
            "info":"Determined to clear Boruto’s name, Sarada hones her Sharingan, aiming for the Mangekyou. As one of Boruto’s few allies, she defies Konoha’s leadership, fighting for justice. Inspired by Sasuke, she dreams of becoming Hokage while balancing her emotions and duty, striving to protect Boruto from those who seek his demise"
        },
        {
            "img":"./respo/boruto/kaw_char.jpg",
            "title":"Kawaki",
            "info":"Obsessed with protecting Konoha, Kawaki sees Boruto as a threat. Wielding Isshiki’s Karma, he becomes a formidable warrior, ruthlessly pursuing Boruto’s elimination. Despite his cold approach, he struggles with inner turmoil, torn between his past bonds and his unwavering belief that erasing Boruto is the only way to maintain peace"
        },
        {
            "img":"./respo/boruto/mit_char.jpg",
            "title":"Mitsuki",
            "info":"Mitsuki, Orochimaru’s artificial son, possesses incredible abilities, including Sage Mode. Once Boruto’s loyal friend, he now sees him as an enemy due to Eida’s altered reality. Torn between logic and emotions, Mitsuki follows Kawaki, believing Boruto is dangerous. However, deep inside, he struggles with his true feelings and purpose"
        },
    ]

    boruto_char_html = ""
    boruto_char_array.forEach(boru_chars =>{
        boruto_char_html += `
            <div class="boruto_character_body_card">
                <div class="boruto_character_body_card_img_section">
                    <img src="${boru_chars.img}">
                </div>
                <div class="boruto_character_body_card_data_section">
                    <h1>${boru_chars.title}</h1>
                    <p>${boru_chars.info}</p>
                </div>
            </div>`
    });
    $(".boruto_character_body").append(boruto_char_html)



</script>


