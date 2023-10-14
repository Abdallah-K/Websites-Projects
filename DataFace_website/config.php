<?php


$baseurl = $_SERVER['PHP_SELF'];


// echo $baseurl;

$splits = explode("/",$baseurl);

$removed = array_pop($splits);
// print_r($splits);
$url = join("/",$splits);

// echo $url;

// echo "<br>";
// var_dump($removed);
// $url = $splits[0]."/".$splits[1]."/".$splits[2]."/";

// print_r($url);







?>