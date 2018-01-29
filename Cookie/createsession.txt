<?php
# createsession.php
session_start();
echo '<p>Welcome to page #1</p>';
echo 'Read data from session:<br />';
// assign session data
$_SESSION['favcolor'] = 'red';
$_SESSION['animal']  = 'cat';
$_SESSION['time']    = time();
// display the assigned data
echo "favcolor = 'red'<br />";
echo "animal = 'cat'<br />";
echo "are stored in a session<br />";
// Works only if session cookie was accepted
echo '<p><a href="readsession.php">To readsession page</a></p>';
?>
