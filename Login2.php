<HTML>
<link rel="stylesheet" type="text/css" href="Homepage.css">
<META HTTP-EQUIV="content-type" CONTENT= "text/html; charset=UTF-8"> 
<HEAD><TITLE>Instant Messaging Ultimate-Login</TITLE>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<script>
function validateForm() {
    var x = document.forms["chat"]["email"].value;
    if (x == "") {
        alert("Δεν πληκτρολογήσατε e-mail");
        return false;
    }
	var y = document.forms["chat"]["password"].value;
    if (y == "") {
        alert("Δεν πληκτρολογήσατε κωδικό");
        return false;
    }
	}
	</script>
<META NAME="Keywords" CONTENT="Chatting ,IM ,Instant Messaging Ultimate , ΔΠΘ, Δημοκρίτειο Πανεπιστήμιο Θράκης, Τμήμα Ηλεκτρολόγων, HTML">
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<body>
<body background="background2.jpg">
<?php
session_start();
if(isset($_SESSION['name'])){
echo '<script type="text/javascript">'; 
echo 'window.location.href = "Chat.php";';
echo '</script>';
}
?>
<ul>
 <li><a href="Homepage.html"><span class="menu">Αρχική</span></a></li>
  <li><a href="Contact.html"><span class="menu">Επικοινωνία</span></a></li>
  <li><a href="Chat.php"><span class="menu">Chat</span></a></li>
</ul>
<form name="chat" onsubmit="return validateForm()" method="POST" action="login.php">
<div><h4>
  E-mail:<br>
  <input type="text" id="email" name="email"><br>
  Password:<br>
  <input type="password" id="pass" name="password"><br>
  <br><input type="submit"id="btn" NAME="Submit" value="Σύνδεση"><br>
</form>
<br>Δεν έχετε εγγραφεί;Κάντε κλικ <A HREF="Register.html">εδώ</H4><br>
</h4></div>
</body>
</html>