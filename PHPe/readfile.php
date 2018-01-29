<?php
# readfile.php
$fp = fopen("chapters.txt", "r") or
die("could not open 'chapters.txt' for read access.");
while (!feof($fp)) {
  $line = fgets($fp);
  echo $line."<br/>";
}
fclose($fp);
?>
