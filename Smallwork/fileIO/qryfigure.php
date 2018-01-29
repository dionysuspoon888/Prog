<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}

table {
    border-collapse: collapse;
	
}

table th, td {
  border: 1px solid black;
	text-align:right;
}



</style>
</head>

<?php




if(!file_exists("salefigure.txt")) {
  die("File not found");
} else {
 $lines = file("salefigure.txt");
}

$sales=array();
$row=0;
foreach($lines as $key => $line){
$row+=1;
$sales[$key]=explode(" ",$line);
}




$height=$row;
  
 
echo "<table>";
echo "<tr><th>Name\Day</th><th>Monday</th> <th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Sub-total</th></tr>";



for ($i=0; $i<$height-1; $i++) {
	echo '<tr>';
	
	
	for ($j=0; $j<7; $j++) {
		echo '<td>'.$sales[$i][$j].'</td>';
	
		
	}
	

	
	echo '</tr>';
}

echo "<tr><td></td><td></td><td></td><td></td><td></td><td>Total:</td><td>".$sales[$row-1][0]."</td></tr>";


echo "</table>";


?>


</html>

