<?php
# bettervisitcookie.php
if (isset($_COOKIE["count"])) {
	$last_count = $_COOKIE["count"];
	setcookie("count", $last_count+1, time()+86400);
}
else
{
	setcookie("count", 1, time()+86400);
}
?>
<html>
<head>
  <title>Better Cookie count</title>
</head>
<body>
<?php
if(isset($_COOKIE["count"]))
   echo "This is your ", $_COOKIE["count"] + 1, " visit.";
else
   echo "This is your initial visit.";
?>
</body>
</html>
