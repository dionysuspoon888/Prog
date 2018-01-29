<?php
# deletecookie.php
$last_count = $_COOKIE["count"];
// Remove cookie
setcookie("count", $last_count+1, time()-86400);
?>
<html>
<head>
<title>Delete Cookie count</title>
</head>
<body>
<?php
echo "Cookie 'count' is deleted.";
?>
</body>
</html>
