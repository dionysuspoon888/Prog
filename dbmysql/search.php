<?php
# search.php
include 'connect.php';

$name = $_POST['name'];

$query = "SELECT topic_id, topic_subject, topic_date, user_name"
		." FROM topics"
		." INNER JOIN users"
		." ON topic_by = user_id";
if (!empty($name)) {
	$query = $query	." WHERE user_name = '".mysqli_real_escape_string($con, $name)."'";
}

$result = mysqli_query($con, $query) or die('Query failed.');

while ($row = mysqli_fetch_assoc($result))
{
   echo "Topic '".$row['topic_subject']."' by ".$row['user_name']. " on ". $row['topic_date']. "<br />";
}

include 'close.php';
?>