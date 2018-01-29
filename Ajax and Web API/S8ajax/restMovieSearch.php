<?php
# restMovieSearch.php
$url = "http://www.omdbapi.com/?";
$url = $url . "&t=" . urlencode("The Hunger Games");
$url = $url . "&y=" . urlencode("2015");
echo "<p>The request url: <br />";
echo "$url </p>";
$response = file_get_contents($url);
// echo the json response from service provider;
echo "<p>The response: <br />";
echo "$response </p>";
echo "<pre>";
// convert the json string to PHP variable
$obj = json_decode($response, true);
// display the structure information of the PHP variable
var_dump($obj);
echo "</pre>";
echo "Display the movie poster <br />";
echo '<img src="'.$obj["Poster"].'" />';
?>

 
