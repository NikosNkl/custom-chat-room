<html>
<div id="chatOutput">
<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
 
// Connect to server and select database.
$db=mysqli_connect("localhost","u57154","5715457154","db_57154");

// email and password sent from form 
$sql="SELECT * FROM msg  ";
$result=mysqli_query($db,$sql);

while ($row = $result->fetch_assoc()) {
    echo $row['date_time'] ," Ο χρήστης ", $row['user'] ," είπε| ",$row['text']."<br>";
}

?>
</div>
</html>