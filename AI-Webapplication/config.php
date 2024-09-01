<?php

$baseurl = $_SERVER['PHP_SELF'];

$splits = explode("/",$baseurl);

$removed = array_pop($splits);
$url = join("/",$splits);


?>