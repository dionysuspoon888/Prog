<?php
# readsession.php
session_start();
echo '<p>Welcome to page #2</p>';
// read and display session data
echo 'favcolor = ' . $_SESSION['favcolor'], "<br />"; // red
echo 'animal = ' . $_SESSION['animal'], "<br />";  // cat
echo 'time = ' . date('Y m d H:i:s', $_SESSION['time']), "<br />";
echo '<p><a href="createsession.php">To creatsession page</a></p>';
// clear and destroy session
$_SESSION = array();
session_destroy();
echo '<p>session is cleared and destroyed!<p/>';
?>
