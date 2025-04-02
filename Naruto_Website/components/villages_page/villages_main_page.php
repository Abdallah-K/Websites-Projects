
<link rel="stylesheet" href="style/villages_page/villages_main_page.css"/>


<section id="villagePage">
    <div class="village_page_header">
        <div class="village_page_header_logo_container">
            <div class="village_page_header_logo">
                <img src="./respo/logo.png">
            </div>
        </div>
        <div class="village_page_header_nav">
            <a href="index.php">Home</a>
            <a href="menu_page.php">Menu</a>
            <a href="legend_page.php">Legends</a>
            <a href="characters_page.php">Characters</a>
            <a href="anime_page.php">Anime</a>
            <a href="manga_page.php">Manga</a>
            <a href="tailed_beasts_page.php">Tailed Beasts</a>
        </div>

    </div>
    <div class="village_page_body">

    </div>

</section>

<script>

    let villages = [
        {
            img:"./respo/villages/Konohagakure.jpg",
            name:"Konohagakure",
        },
        {
            img:"./respo/villages/Sunagakure.jpg",
            name:"Sunagakure",
        },
        {
            img:"./respo/villages/Iwagakure.jpg",
            name:"Iwagakure",
        },
        {
            img:"./respo/villages/Kirigakure.jpg",
            name:"Kirigakure",
        },
        {
            img:"./respo/villages/Kumogakure.jpg",
            name:"Kumogakure",
        },
        {
            img:"./respo/villages/Amegakure.jpg",
            name:"Amegakure",
        },
        {
            img:"./respo/villages/Otogakure.jpg",
            name:"Otogakure",
        },
        {
            img:"./respo/villages/Uzushiogakure.jpg",
            name:"Uzushiogakure",
        },
        {
            img:"./respo/villages/Takigakure.jpg",
            name:"Takigakure",
        },
        {
            img:"./respo/villages/Yugakure.jpg",
            name:"Yugakure",
        },
        {
            img:"./respo/villages/Curtain.jpg",
            name:"Curtain",
        },
        {
            img:"./respo/villages/Yumegakure.jpg",
            name:"Yumegakure",
        },
    ]

    villages.forEach(vill=>{
        $(".village_page_body").append(`
            <div class="village_page_body_container_card">
                <img src="${vill.img}">
                <div class="village_page_body_container_card_overlay">
                    <h3>${vill.name}</h3>
                </div>
            </div>`)
    })


</script>