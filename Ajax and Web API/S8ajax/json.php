<?php
# json.php
// construct a JSON string
$json_str =
'{ "employees" : [' .
 '{ "firstName":"John" , "lastName":"Doe" },' .
 '{ "firstName":"Anna" , "lastName":"Smith" },' .
 '{ "firstName":"Peter" , "lastName":"Jones" } ]}';
echo $json_str;
$assoc_array = json_decode($json_str, true);
echo "<pre>";
// display the structure information of the PHP variable
print_r($assoc_array);
echo "</pre>";
// convert back to a JSON string
echo "Convert back to JSON string: <br />";
echo json_encode($assoc_array);
?>

