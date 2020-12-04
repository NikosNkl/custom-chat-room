<?php
$db=mysqli_connect("localhost","u57154","5715457154","db_57154");
header('Content-Type: text/html; charset=utf-8');
if(ISSET($_POST['register_btn']))
{
$email = ($_POST['email']);
$password = ($_POST['password']);
$r_password = ($_POST['r_password']);
    if($password==$r_password)
   {
	     $sql="INSERT INTO users(email,password) VALUES('$email','$password')";
		 $result=mysqli_query($db,$sql);
		 echo '<script type="text/javascript">'; 
		 echo 'alert("Επιτυχής Εγγραφή");'; 
		 echo 'window.location.href = "Login2.php";';
		 echo '</script>';
		 
		 }
		 else
		 {
		 echo '<script type="text/javascript">'; 
		 echo 'alert("Λάθος επαναπληκτρολόγηση κωδικού");'; 
		 echo 'window.location.href = "Register.html";';
		 echo '</script>'; 
		 }
	}

?>
	     