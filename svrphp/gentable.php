<?php
$width = $_POST["width"];
$height = $_POST["height"];
echo '<table border="1">';
for ($i=0; $i<$height; $i++) {
	echo '<tr>';
	for ($j=0; $j<$width; $j++) {
		echo '<td>'.($i*$width+$j+1).'</td>';
	}
	echo '</tr>';
}
echo '</table>';
?>