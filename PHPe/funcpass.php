<?php
# funcpass.php
// pass-by-value.
function addOne1($param) {
  $param++;
}
$it = 16;
addOne1($it);  // $it is still 16
echo $it."<br />";
// pass-by-reference.
function addOne2(&$param) {
  $param++;
}
$it = 16;
addOne2($it);  // $it is now 17
echo $it."<br />";
?>

