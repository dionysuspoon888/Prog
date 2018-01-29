<?php
# array.php
// Example of numeric array
$na=array("a", "b", "c");
echo $na[0]."<br/>";	// return a; 
// Example of associative array
$aa=array("a"=>0,"b"=>1,"c"=>2);
echo $aa["b"]."<br/>";	// display 1
// Example of multidimensional array 
$ma=array("a"=>array(0,1),"b"=>array("x"));
echo $ma["a"][1]."<br/>";	//display 1
echo "<pre>";
print_r($na);
print_r($aa);
print_r($ma);
echo "</pre>";
?>
