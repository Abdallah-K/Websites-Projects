
<link rel="stylesheet" href="style/anime_page/anime_main_page.css"/>

<section id="animePage">

    <div class="anime_page_header">
        <div class="anime_page_header_logo_conatianer">
            <div class="anime_page_header_logo">
                <img src="./respo/logo.png">
            </div>
        </div>
        <div class="anime_page_header_nav">
            <a href="index.php">Home</a>
            <a href="menu_page.php">Menu</a>
            <a href="legend_page.php">Legends</a>
            <a href="characters_page.php">Characters</a>
            <a href="manga_page.php">Manga</a>
            <a href="tailed_beasts_page.php">Tailed Beasts</a>
            <a href="villages_page.php">Villages</a>
        </div>

    </div>
    <div class="anime_page_body" id="csvOutput">



    </div>

</section>

<script>
    $(document).ready(function() {
        var csvFileUrl = 'components/anime_page/naruto.csv'; 

        $.ajax({
            url: csvFileUrl,
            dataType: 'text',
            success: function(csvData) {
                processCSV(csvData);
            },
            error: function() {
                alert("Error loading CSV file.");
            }
        });
    });

    function processCSV(csvData) {
        var rows = csvData.split('\n');
        var table = '<table class="anime_table"><thead><tr>';

        var headers = parseCSVRow(rows[0]);
        headers.forEach(function(header, index) {
            if (index !== 0) {
                table += '<th>' + header.trim() + '</th>';
            }
        });
        table += '</tr></thead><tbody>';

        for (var i = 1; i < rows.length; i++) {
            var row = parseCSVRow(rows[i]);
            table += '<tr>';
            row.forEach(function(cell, index) {
                if (index !== 0) {
                    table += '<td>' + cell.trim() + '</td>';
                }
            });
            table += '</tr>';
        }

        table += '</tbody></table>';
        $('#csvOutput').html(table);
    }

    function parseCSVRow(row) {
        var regex = /(".*?"|[^",\n]+)(?=\s*,|\s*$)/g;
        var result = [];
        var match;

        while (match = regex.exec(row)) {
            result.push(match[0].replace(/^"|"$/g, '').trim()); 
        }

        return result;
    }
</script>