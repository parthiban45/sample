<?
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-colors-camo.css">
<head>
<!-- header imports -->
<?php include("header-imports.php"); ?>
<!-- -->
</head>
<body class="w3-container w3-camo-green">
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#Tutorials">Tutorials</a></li>
 <!-- <li><a href="#vTuts">vTuts</a></li> -->
  <li><a href="#About.php">About us</a></li>
  <!-- <li><a href="#about">About</a></li> -->
</ul>
<!-- Contact Section -->
  <div class="w3-container w3-padding-64 w3-half" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Contact</h3>
    <p>Lets get in touch.</p>
    <form action="" method="POST" enctype="multipart/form-data" target="_blank">
	<input type="hidden" name="action" value="submit">
      <input class="w3-input" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-validate" type="email" placeholder="Email" required name="Email">
      <input class="w3-input w3-section" type="text" placeholder="Subject" required name="Subject">
      <textarea class="w3-input w3-section" type="text" placeholder="Comment" required name="Comment"></textarea>
      <button class="w3-btn w3-section w3-orange" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
	
  </div>
 
  </body>
  <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['Name'];
    $email=$_REQUEST['Email'];
    $message=$_REQUEST['Comment'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("parthi45.psg@gmail.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?>
						

			