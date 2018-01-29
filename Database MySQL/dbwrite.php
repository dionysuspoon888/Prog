<?php
# dbwrite.php
include 'connect.php';

$query="INSERT INTO users (user_name, user_pass)
 VALUES ('Tom10', '1234')";
$result=mysqli_query($con, $query);
If ($result)
{
   echo mysqli_affected_rows($con) . " records inserted.<br/>";
   echo "The user id is " . mysqli_insert_id($con) . "<br/>";
}
else {
   echo "Fail to insert record<br/>";
}

$query = "SELECT * FROM users";
$result = mysqli_query($con, $query) or die('Query failed.');

echo mysqli_num_rows($result);
echo "<br/>";
while ($row = mysqli_fetch_assoc($result))
{
   echo 'user_id:' . $row['user_id'] . ", ";
   echo 'user_name:' . $row['user_name'] . ", ";
   echo 'user_pass:' . $row['user_pass'] . "<br />";
}

include 'close.php';
?>