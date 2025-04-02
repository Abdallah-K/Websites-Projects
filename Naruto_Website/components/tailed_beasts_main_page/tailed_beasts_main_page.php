



<link rel="stylesheet" href="./style/tailed_beasts_main_page/tailed_beasts_main_page.css"/>

<section id="tailedPage">
    <div class="tailed_header">
        <div class="tailed_header_logo_container">
            <div class="tailed_header_logo">
                <img src="./respo/logo.png">
            </div>

        </div>
        <div class="tailed_header_nav">
            <a href="index.php">Home</a>
            <a href="menu_page.php">Menu</a>
            <a href="legend_page.php">Legends</a>
            <a href="characters_page.php">Characters</a>
            <a href="anime_page.php">Anime</a>
            <a href="manga_page.php">Manga</a>
            <a href="villages_page.php">Villages</a>
        </div>

    </div>
    <div class="tailed_body">


    </div>

</section>


<script>

    let tailedBeasts = [
        {
            img: "./respo/beasts/1.jpg",
            name: "Shukaku (One Tail)",
            info: "Shukaku, the One-Tailed Beast, resembles a tanuki and was sealed inside Gaara. It has sand manipulation abilities and grants its jinchūriki absolute defense using sand shields. Shukaku is known for its erratic personality and deep hatred towards humans. Its chakra enables powerful sealing techniques and destructive wind-based attacks. The beast was created by Hagoromo Ōtsutsuki, the Sage of Six Paths, and originally lived freely. However, it was captured and used as a weapon for war. It later became a key figure in the Fourth Shinobi War, aiding Naruto and the Allied Shinobi Forces against the Ten-Tails."
        },
        {
            img: "./respo/beasts/2.jpg",
            name: "Matatabi (Two Tails)",
            info: "Matatabi, the Two-Tailed Beast, has a feline appearance covered in blue flames. It was sealed within Yugito Nii of Kumogakure and possesses immense agility and speed. Matatabi’s chakra allows it to generate and control intense blue flames, capable of incinerating enemies. Despite its aggressive power, it is one of the more docile Tailed Beasts. It respects those who treat it fairly and was ultimately freed during the Fourth Shinobi War. Like all Tailed Beasts, Matatabi was originally part of the Ten-Tails before being split by Hagoromo Ōtsutsuki to maintain balance in the world."
        },
        {
            img: "./respo/beasts/3.jpg",
            name: "Isobu (Three Tails)",
            info: "Isobu, the Three-Tailed Beast, takes the form of a giant, spiky turtle and was once sealed within Yagura Karatachi of Kirigakure. It possesses water-based abilities, allowing it to create massive tidal waves and coral formations to trap its enemies. Isobu's tough shell provides immense durability, making it resistant to physical attacks. It can roll at high speeds to crush opponents. Despite its power, it prefers to stay hidden underwater and avoid conflicts. It was freed after the Akatsuki captured it but was later revived. Like all Tailed Beasts, it shares a deep connection with its fellow creatures."
        },
        {
            img: "./respo/beasts/4.jpg",
            name: "Son Gokū (Four Tails)",
            info: "Son Gokū, the Four-Tailed Beast, resembles a mighty red-furred monkey with green skin. It was sealed inside Roshi from Iwagakure and specializes in fire-based techniques. Its chakra grants the ability to use Lava Release, which combines earth and fire chakra to create molten attacks. Son Gokū is extremely proud and despises being controlled, valuing its freedom above all else. It was captured by the Akatsuki but later played a crucial role in the Fourth Shinobi War. Despite its initial distrust, it formed a bond with Naruto Uzumaki, recognizing his genuine respect for all Tailed Beasts."
        },
        {
            img: "./respo/beasts/5.jpg",
            name: "Kokuō (Five Tails)",
            info: "Kokuō, the Five-Tailed Beast, has the appearance of a white, horse-dolphin hybrid with red horns. It was sealed inside Han of Iwagakure and possesses Steam Release, which combines water and fire chakra for explosive energy. This ability grants it incredible physical strength, allowing it to generate bursts of force powerful enough to shatter mountains. Kokuō is a peaceful creature that avoids unnecessary conflicts but will fight fiercely if provoked. It was captured by the Akatsuki but later freed. It prefers solitude but acknowledges the importance of unity among the Tailed Beasts in maintaining world balance."
        },
        {
            img: "./respo/beasts/6.jpg",
            name: "Saiken (Six Tails)",
            info: "Saiken, the Six-Tailed Beast, is a massive, slug-like creature with white skin and blue patterns. It was sealed within Utakata of Kirigakure and possesses the ability to produce highly corrosive fluids. These secretions can dissolve almost anything, making it a formidable opponent in battle. Saiken is capable of creating acidic mists to weaken its enemies. Despite its grotesque appearance, it is relatively gentle compared to other Tailed Beasts. It was captured by the Akatsuki but later played a role in the Fourth Shinobi War. Saiken values friendship and cooperation, unlike many of its more aggressive counterparts."
        },
        {
            img: "./respo/beasts/7.jpg",
            name: "Chōmei (Seven Tails)",
            info: "Chōmei, the Seven-Tailed Beast, is a giant beetle with bright blue wings and an armored exoskeleton. It was sealed inside Fū of Takigakure and possesses the ability to fly at incredible speeds. Chōmei’s chakra allows it to create blinding flashes of light, which disorient its opponents. It can also generate strong gusts of wind and use its sharp wings for slicing attacks. Among the Tailed Beasts, it is the most cheerful and often refers to itself as 'Lucky Seven Chōmei.' Despite its imprisonment by the Akatsuki, it maintains a positive outlook and values its bonds with others."
        },
        {
            img: "./respo/beasts/8.jpg",
            name: "Gyūki (Eight Tails)",
            info: "Gyūki, the Eight-Tailed Beast, is a powerful ox-octopus hybrid known for its immense strength. It was sealed inside Killer Bee of Kumogakure, forming a strong partnership with him. Gyūki specializes in ink-based techniques, which it uses to blind opponents or create seals. Its tentacles allow it to grapple and crush enemies with ease. Unlike many Tailed Beasts, Gyūki is highly intelligent and values strategy over brute force. It played a key role in the Fourth Shinobi War, fighting alongside Naruto and Bee. Despite its rough exterior, it deeply cares for its allies and respects true warriors."
        },
        {
            img: "./respo/beasts/9.jpg",
            name: "Kurama (Nine Tails)",
            info: "Kurama, the Nine-Tailed Beast, is the strongest of all Tailed Beasts, resembling a giant fox with fiery orange fur. It was sealed inside Naruto Uzumaki and possesses immense chakra reserves. Kurama’s power allows it to create massive Tailed Beast Bombs capable of leveling mountains. Initially full of hatred, it despised humans for exploiting its power. However, over time, Naruto earned its trust, and they formed an unbreakable bond. Kurama played a crucial role in the Fourth Shinobi War, helping Naruto achieve his full potential. It is a symbol of strength, redemption, and the power of true friendship."
        },
        {
            img: "./respo/beasts/10.jpg",
            name: "Jūbi (Ten Tails)",
            info: "The Jūbi, or Ten-Tails, is the primordial Tailed Beast and the original form of all others. It was created when Kaguya Ōtsutsuki fused with the God Tree to reclaim the chakra stolen by her sons. The Jūbi possesses unfathomable power, capable of reshaping entire landscapes and creating devastating natural disasters. Its chakra is so vast that it was split into the nine Tailed Beasts by Hagoromo Ōtsutsuki to prevent it from running rampant. It was revived during the Fourth Shinobi War by Obito and Madara Uchiha. Its overwhelming strength makes it a force of destruction and chaos."
        }
    ];



    tailedBeasts.forEach(beast =>{
        $(".tailed_body").append(`
            <div class="tailed_body_card">
                <div class="tailed_body_card_img">
                    <img src="${beast.img}">
                </div>
                <div class="tailed_body_card_data">
                    <h1>${beast.name}</h1>
                    <p>${beast.info}</p>
                </div>
            </div>
        `);
    })


</script>
