

<section id="yaml_body">

    <button id="yml_gene">Create yaml</button>

</section>


<script>

    $(function(){
        var location = window.location.pathname;
        location = location.split("/").slice(0, -1).join('/');
        $("#yml_gene").click(function(){
            var api_path = `C:/xampp/htdocs${location}/views/dataset/${"<?=$user?>"}`;
            $.ajax({
                url:`http://127.0.0.1:5000/yaml_file?path=${api_path}&name=<?=$user?>`,
                type: 'get',
                success: function(data){
                    alert(data)
                }
            })
        })
    })

</script>