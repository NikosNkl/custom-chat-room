<HTML>
<link rel="stylesheet" type="text/css" href="chat.css">
<META HTTP-EQUIV="content-type" CONTENT= "text/html; charset=UTF-8"> 
<HEAD><TITLE>Συνομιλία</TITLE>
<META NAME="Keywords" CONTENT="Chatting ,IM ,Instant Messaging Ultimate , ΔΠΘ, Δημοκρίτειο Πανεπιστήμιο Θράκης, Τμήμα Ηλεκτρολόγων, HTML,Contact">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</HEAD>
<BODY>
<ul>
 <li><a href="Homepage.html"><span class="menu">Αρχική</span></a></li>
  <li><a href="Contact.html"><span class="menu">Επικοινωνία</span></a></li>
  <li><a href="Chat.html"><span class="menu">Chat</span></a></li>
  <li><a href="logout.php"><span class="menu">Έξοδος</span></a></li>
</ul>
<body background="background2.jpg">
<?php
session_start();
if(!isset($_SESSION['name'])){
echo '<script type="text/javascript">'; 
echo 'window.location.href = "Login2.php";';
echo '</script>';
}
?>
<div id="wrapper">
    <div id="mainmenu">
        <p class="welcome">Καλωσήρθες, <b><?php echo $_SESSION['name']; ?></b></p>
        <div style="clear:both"></div>
    </div>
    <div id="chatOutput">
    </div>
     
    <form name="message" a>
        <input name="chat_text" type="text" id="chat_text" placeholder="Πληκτρολογήστε εδώ" size="63" />
        <input name="chatsend" type="submit"  id="chatsend" value="Αποστολή" />
    </form>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
    //If user submits the form
  $("#chatsend").click(function(){ 
    var clientmsg = $("#chat_text").val();
    $.post("write.php", {text: clientmsg});        
    $("#chat_text").attr("value", "");
    return false;
  });
  //Load the file containing the chat log
$("#chatsend").click(function loadLog(){   

    $.ajax({
      url: "read.php",
      cache: false,
      success: function(html){    
        $("#chatOutput").html(html);   
        },

    });
  
  })
  setInterval ((function loadLog(){   

    $.ajax({
      url: "read.php",
      cache: false,
      success: function(html){    
        $("#chatOutput").html(html);   
        },

    });
  
  }), 2000);


  </script>

</body>
</html>