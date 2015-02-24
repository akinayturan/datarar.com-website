<?php
$url_al = $_SERVER['REQUEST_URI'];
$url_dizisi = split(' |/', $url_al);
header("Location: http://datarar.com/?s=$url_dizisi[1]");
?>
