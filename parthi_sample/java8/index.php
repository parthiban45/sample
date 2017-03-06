<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $logfile = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($logfile, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);  
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
<!-- header imports -->
<?php include("header-imports.php"); ?>
<!-- -->
</head>
<body class="w3-container">
<!-- header -->
<?php include("header.php"); ?>
<!-- -->

<!-- Side navigation bar -->
<?php include("menu.php"); ?>
<!-- -->


<div class="w3-main" style="margin-left:200px">

<header class="w3-container w3-amber">
  <span class="w3-opennav w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</span>
  <h2>Java 8</h2>
</header>


<div class="w3-container" >
  <p><b>Introduction</b></p>
	<p>This tutorial walks you through every step by step aspects this new Java8 language features.</p>
	<p>Few picked important new Features added in Java 8 release are listed below,
<p>Lambda expression - Pass functionality as an argument to another method, Adds functional processing capability to Java (like Scala).</p>
<p>Default method - Interface to have default concrete method implementation.</p>
<p>Method references - Referencing functions by their names instead of invoking them directly. Using functions as parameter.</p>
<p>Stream API - New stream API to process data in a declarative way.</p>
<p>Date Time API - Brand new date and time API.</p>
<p>Optional class - To handle null values properly.</p>
<p></p>
</p> 
</div>
<div class="w3-container">
<br/>
<br/>
<!--<a class="w3-btn w3-left w3-camo-green w3-border" href="Memory_model.php">« Previous</a>-->
<a class="w3-btn w3-right w3-camo-green w3-border" href="Memory_model.php">Next »</a>
<br/>
<br/>
<br/>
<br/>
</div>


</div>

<script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>
<div>
   <?php include("footer.php"); ?>  
</div>
</body>
</html>
<? 
} 
?>

