<?php
session_start();
session_destroy();
 header("Location: Login2.php"); //Redirect the user
?>