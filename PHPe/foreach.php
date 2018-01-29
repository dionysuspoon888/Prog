<?php
# foreach.php
$na=array("a", "b", "c");
$aa=array("a"=>0,"b"=>1,"c"=>2);
foreach ($na as $val) {
  echo "$val<br/>";
}
foreach ($aa as $key=>$val) {
echo "Key=$key; Val=$val<br/>";
}
?>

