<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
 
// Connect to server and select databse.
$db=mysqli_connect("localhost","u57154","5715457154","db_57154");
// email and password sent from form 
$email=$_POST['email']; 
$password=$_POST['password']; 


$sql="SELECT * FROM users WHERE email='$email' && password='$password'";
$result=mysqli_query($db,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
$_SESSION['name'] = $email;


echo '<script type="text/javascript">'; 
echo 'alert("Επιτυχής Σύνδεση");'; 
echo 'window.location.href = "Chat.php";';
echo '</script>';
		 
}
else
{
echo '<script type="text/javascript">'; 
echo 'alert("Το e-mail ή ο κωδικός σας είναι λάθος");'; 
echo 'window.location.href = "Login2.php";';
echo '</script>'; 
		 }
?>
	  