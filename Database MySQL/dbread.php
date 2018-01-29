<?php
# dbread.php
include 'connect.php';

$query = "SELECT * FROM users";
$result = mysqli_query($con, $query) or die('Query failed.');

echo mysqli_num_rows($result);
echo "<pre>";
print_r(mysqli_fetch_array($result));
print_r(mysqli_fetch_row($result));
echo "</pre>";
while ($row = mysqli_fetch_assoc($result))
{
   echo $row['user_name'] . "<br />";
}

include 'close.php';
?>