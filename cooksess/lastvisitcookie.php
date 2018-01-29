<?php
# lastvisitcookie.php
if (isset($_COOKIE["last_visit"])) {
  $last_visit = $_COOKIE["last_visit"];
}
setcookie("last_visit", date("Y-m-d H:i:s"), time()+30*24*60*60);
?>
<html>
<head>
  <title>Last visit</title>
</head>
<body>
<?php
if(isset($last_visit))
   echo "Your last visit on ". $last_visit;
else
   echo "You did not visit us for more than 30 days";
?>
</body>
</html>
