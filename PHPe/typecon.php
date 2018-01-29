<?php
# typecon.php
$a="a1";
$b="2";
$c=3.9;
$d="4a";
$e="1e5";
echo $a+$b."<br/>";          // 2
echo $b+$c."<br/>";          // 5.9
echo $c+$d."<br/>";          // 7.9
echo $d+$e."<br/>";          // 100004
echo (int)$a."<br/>";        // 0
echo intval($b)."<br/>";     // 2
settype($c, "integer");
echo $c."<br/>";             // 3
echo gettype($a)."<br/>";
echo is_integer($c)."<br/>"; // 1 (true)
?>
