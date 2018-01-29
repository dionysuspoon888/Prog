<?php
# connect.php
$con = mysqli_connect('localhost', 'compuser', 'secret');
If (!$con) {
   //die output a message and terminate the current script
   die('Could not connect: ' . mysqli_connect_errno());
}
mysqli_select_db($con, "compdb") or
die('Could not select database.');
?>