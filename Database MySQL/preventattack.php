<?php
# dbattack.php
include 'connect.php';

$username = 'Tom';
$password = "' OR ''='"; // database attack

// prevent database attack using mysql_real_escape_string()
$query = "SELECT * FROM users where user_name = '$username'
  AND user_pass = '" .mysqli_real_escape_string($con, $password)."'";

echo 'Entered Password: ' . $password ."<br/>";
echo 'Query string: ' . $query . "<br/><br/>";
$result = mysqli_query($con, $query) or die('Query failed.');

echo 'No. of record selected: ' . mysqli_num_rows($result);
echo "<pre>";
print_r(mysqli_fetch_row($result));
echo "</pre>";

include 'close.php';
?>