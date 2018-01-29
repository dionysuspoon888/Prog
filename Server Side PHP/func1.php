<?php
# func1.php
bar();
function bar() {
  echo "I exist immediately upon program start.\n";
}
/*
function bar($a) {
  // Redefine a function is an error
  echo "$a\n";
}
*/
function bara($a) {
  echo "$a\n";
}
bara("Hi!");
?>
