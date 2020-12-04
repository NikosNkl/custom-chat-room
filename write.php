<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
// Connect to server and select databse.
$db=mysqli_connect("localhost","u57154","5715457154","db_57154");

/*Check connection*/
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$name=$_SESSION['name'];
$text=$_POST['text'];
date_default_timezone_set("Europe/Athens");
$time=date("Y-m-d H:i:s");

$sql="INSERT INTO msg (date_time, user, text)
  VALUES
  ('$time','$name','$text')";

  if (!mysqli_query($db,$sql)){
    die('Error: ' . mysqli_error($db));
}

mysqli_close($db);
?>