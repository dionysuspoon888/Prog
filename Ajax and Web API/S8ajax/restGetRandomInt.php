<?php
$url = "http://www.random.org/integers/";
$url = $url . "?num=10&min=1&max=6&col=1&base=10&format=plain&rnd=new";
$response = file_get_contents($url);
// echo the json response from service provider;
echo $response;
?>
 
