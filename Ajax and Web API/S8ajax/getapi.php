<?php
// Use $_SERVER to get environment information
// REQUEST_METHOD: Request method, e.g., GET and POST, etc.
// PATH_INFO: Pathname trailing the script filename but preceding the query string
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$table = array_shift($request);
$key = array_shift($request)+0;
 
$link = mysqli_connect('localhost', 'compuser', 'secret', 'compdb');

$error = false;

switch ($method) {
  case 'GET':
    $sql = "SELECT * FROM $table".($key?" WHERE id=$key":'');
    $result = mysqli_query($link,$sql);
    if ($result) {
      if (!$key) echo '[';
      for ($i=0;$i<mysqli_num_rows($result);$i++) {
	    $record = mysqli_fetch_object($result);
	    echo ($i>0?',':'').json_encode($record);
      }
      if (!$key) echo ']';
      mysqli_free_result($result);
    } else {
      $error = true;
    }
    break;
  case 'PUT':
    // replace code for PUT request;
    $error = true; break;
  case 'POST':
    // replace code for POST request;
    $error = true; break;
  case 'DELETE':
    // replace code for DELETE request;
    $error = true; break;
  default:
    $error = true;
}

if ($error) {
  http_response_code(404);
}
mysqli_close($link);
?>