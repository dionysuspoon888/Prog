<html>
<head>
  <title>Show information</title>
</head>
<body>
<?php
# showinfo.php
if (isset($_POST['submit'])) {
echo '<p>Data inside $_POST<br/>';
echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '</p>';
}
?>
</body>
</html>
