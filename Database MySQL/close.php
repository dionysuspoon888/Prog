<?php
# close.php
// Free results after use
mysqli_free_result($result);
mysqli_close($con);
?>