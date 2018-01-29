<?php

session_start();


?>

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

<body>  

<?php
$nameR="";
$name="";
$mons="";
$tues="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["sname"])) {
    $nameR = "Name is required";
  } else {
    $name = test_input($_POST["sname"]);
	$mons = test_input($_POST["smon"]);
	$tues = test_input($_POST["stues"]);
	$wed = test_input($_POST["swed"]);
	$thur = test_input($_POST["sthur"]);
	$fri = test_input($_POST["sfri"]);
	
	
  
    if (!preg_match("/^[a-zA-Z0-9]+$/",$name)) {
      $nameR = "Only a - z, A - Z and 0 - 9 input are allowed.";
    }else{ 
	
	
if(!isset( $_SESSION["v"]) ) {
$_SESSION["sales"]= array();
$_SESSION["v"]=0;

}
	
$form= array($name,$mons,$tues,$wed,$thur,$fri);
array_push($_SESSION["sales"],$form); 

$_SESSION["v"] =$_SESSION["v"]+1;

	
	}
	
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Sales person name: <input type="text" name="sname" /><span class="error"><?php if( isset( $_POST["sub"]) ){echo $nameR;}?></span>
<br />
Sales figure: 
<br />
Monday <input type="number" min="0" name="smon" />
<br/>
Tuesday <input type="number" min="0" name="stues" />
<br />
Wednesday <input type="number" min="0" name="swed" />
<br />
Thursday<input type="number" min="0" name="sthur" />
<br />
Friday <input type="number" min="0" name="sfri" />
<br />
<input type="submit" name="sub" value="submit" />
<br/>
<input type="submit" name="cal" value="calculate">
<br/>
<input type="submit" name="save" value="save">
<br/>

</form>







<?php

  
if( isset( $_POST["cal"]) ){
 
echo "<table>";
echo "<tr><th>Name\Day</th><th>Monday</th> <th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Sub-total</th></tr>";

if(isset($_SESSION["v"])){
$height=$_SESSION["v"];

}else{
$height=0;

}


$sum=0;
for ($i=0; $i<$height; $i++) {
	echo '<tr>';
	$sub=0;
	
	for ($j=0; $j<6; $j++) {
		echo '<td>'.$_SESSION["sales"][$i][$j].'</td>';
		$sub +=$_SESSION["sales"][$i][$j];
		
	}

	
	echo '<td>'.$sub.'</td>';
	
	$sum+=$sub;
	
	echo '</tr>';
}
echo "<tr><td></td><td></td><td></td><td></td><td></td><td>Total:</td><td>".$sum."</td></tr>";


echo "</table>";

}
?>


<?php
if( isset( $_POST["save"]) ){

$ss= fopen("salefigure.txt", "w") ;

if(isset($_SESSION["v"])){
$height=$_SESSION["v"];

}else{
$height=0;

}

$sum=0;
$text="";

for ($i=0; $i<$height; $i++) {
	
	$sub=0;
	
	for ($j=0; $j<6; $j++) {
		$text=$_SESSION["sales"][$i][$j]." ";
		$sub +=$_SESSION["sales"][$i][$j];	
		fwrite($ss,$text);
		
	}
	$text= $sub."\r\n" ;
	fwrite($ss,$text);
	
	$sum+=$sub;
	

}
$text=$sum;
fwrite($ss,$text);


fclose($ss);



}
?>


<a href="
<?php
$curdir = dirname($_SERVER['PHP_SELF'])."/";
echo $curdir;
?>
qryfigure.php"
>
Go to another page qryfigure.php
</a>







</body>

</html>