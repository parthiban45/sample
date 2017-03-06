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
  <h2>Memory Model</h2>
</header>

<div class="w3-container">
<p>With the introduction of Java 8 decommissioned PermGen space memory model and introduces new memory model called MetaSpace.</P>
<p>MetaSpace - Java 8 JVM uses native memory for representation of storing class metadata and this memory space in native memory is called to be MetaSpace.</P>
<p>Metaspace capacity -  Class metadata allocation is limited by the amount of available native memory (OS virtual memory availability) by default.</P>
<p>Metaspace garbage collection -  Garbage collection gets triggered once the class metadata usage reaches the "MaxMetaspaceSize". </p> 
<p>"MaxMetaspaceSize" - New flag introduced to let us specify the limit for amount of native memory to be used for class metadata storage.</P>

</div>
<div class="w3-container">
<br/>
<br/>
<a class="w3-btn w3-left w3-camo-green w3-border" href="index.php">« Previous</a>
<a class="w3-btn w3-right w3-camo-green w3-border" href="default_methods.php">Next »</a>
<br/>
<br/>
<br/>
<br/>
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


