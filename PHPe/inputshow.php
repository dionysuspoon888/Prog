<html>
<head>
  <title>Input and show</title>
</head>
<body>
<form action="" method="post">
Last Name:
<select name="title_data">
  <option>Mr</option>
  <option>Mrs</option>
  <option>Miss</option>
</select>
<input type="text" name="name_data" /><br/>
Password: <input type="password" name="pass_data" /><br/>
Gender: <input type="radio" name="gender_data" value="Male"/>Male
<input type="radio" name="gender_data" value="Female"/>Female<br/>
Your favorite colors:
<input type="checkbox" name="color_data[]" value="Blue"/>Blue
<input type="checkbox" name="color_data[]" value="Green"/>Green
<input type="checkbox" name="color_data[]" value="Red"/>Red<br/>
Please enter your address: <br/>
<textarea name="addr_data" rows="5" cols="30"></textarea><br/>
<input type="submit" name="submit"/>
</form>
<?php
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
