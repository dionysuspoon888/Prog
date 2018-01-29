<?php
# betterdeletecookie.php
if (isset($_COOKIE["count"])) {
  $last_count = $_COOKIE["count"];
  // Remove cookie
  setcookie("count", $last_count+1, time()-86400);
}
?>
<html>
<head>
<title>Better delete Cookie count</title>
</head>
<body>
<?php
echo "Cookie 'count' is deleted.";
?>
</body>
</html>
