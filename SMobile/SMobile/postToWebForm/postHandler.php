<?php
$name = $_POST['name'];
$age = $_POST['age'];
$a = array('name'=>$name, 'age'=>$age);
echo json_encode($a);
?>