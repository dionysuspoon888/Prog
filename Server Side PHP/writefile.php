<?php
# writefile.php
$fp = fopen("something.txt", "a") or
die("could not open 'something.txt' for read access.");
if (flock($fp, LOCK_EX)) {	// do an exclusive lock   
  fwrite($fp, "Write something here.\n"); 
  flock($fp, LOCK_UN);	// release the lock 
}  
else {
  echo "Couldn't lock the file !";
} 
fclose($fp);
// display content of the file
$file_lines = file("something.txt");
foreach ($file_lines as $line) {
  echo $line."<br/>";
}
?>
