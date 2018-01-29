<?php
# visitcookie.php
// Notice that setcookie must be called prior to any output,
// including <html> and <head> tags as well as any whitespace
$last_count = $_COOKIE["count"];
setcookie("count", $last_count+1, time()+86400);
?>
<html>
<head>
  <title>Cookie count</title>
</head>
<body>
<?php
if($_COOKIE["count"])
   echo "This is your ", $_COOKIE["count"], " visit.";
else
   echo "This is your initial visit.";
?>
</body>
</html>
