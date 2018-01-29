<?php
# scope.php
$sum = 10;
function addtosum($x) {
  global $sum;
//  $sum = 10;
  $sum = $sum + $x;
  echo $sum . "<br />";
}
addtosum(4);
echo $sum . "<br />";
?>
