<?php
# func2.php
// Supports variable number of parameters
function foo() {
 $numargs = func_num_args();
 echo "Number of arguments: $numargs<br />\n";
 if ($numargs >= 2) {
  echo "Second argument is: " . func_get_arg(1) . "<br />\n";
 }
}
foo("FirstArg", "SecondArg");
// Supports default parameter values
function add($a, $b=2) {
 return $a+$b;
}
echo add(1)."<br />"; // result: 3
Foo("OnlyOneArg");
?>

