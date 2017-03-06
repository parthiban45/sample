<!DOCTYPE html>
<html>
<!-- header imports -->
<?php include("header-imports.php"); ?>
<!-- -->
<head>

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
  <h2>Default Methods</h2>
</header>

<div class="w3-container">
<p>Java 8 permits us to add concerte method implementation to interfaces with the help of default keyword.</P>
<p>You can have any number of default method implementations inside an interface in Java8, allows us to extend the functionality of an interface without posing any errors wrt implementor classes. This feature is also known as Extension Methods.</P>
<p>Example :</P>
<p><pre style="background-color: #001933;
    color: #cccccc;
    display: block;
    font-size: 12px;
    line-height: 1.42857;
    margin: 0 0 10px;
    padding: 10px;
    word-break: break-all;
    word-wrap: break-word;
	font-family: Monaco,Menlo,Consolas,Courier New,monospace;"> 
interface print {
	public void A6print();

	default void A4print() {
		System.out.println("A4 Printer");
	}
}

class Myprint implements print {

	public void A6print() {
		System.out.println("A6 Printer");
	}

}</pre>
</p> 
<p> <ol> Myprint class does not required to provide implementation to A4print default method present in Interface print. </ol></P>
 <div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Try what happens if you add provide implementation to A4print method in your sub class.</p>

</div> 

<pre style="background-color: #001933;
    color: #cccccc;
    display: block;
    font-size: 12px;
    line-height: 1.42857;
    margin: 0 0 10px;
    padding: 10px;
    word-break: break-all;
    word-wrap: break-word;
	font-family: Monaco,Menlo,Consolas,Courier New,monospace;">public class Testprint {

	public static void main(String args[]) {
		print p = new Myprint();
		p.A4print();
	}
}
</pre>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Output : A4 Printer</p>

</div> 

<p>Anonymous class implementation</p>

<pre style="background-color: #001933;
    color: #cccccc;
    display: block;
    font-size: 12px;
    line-height: 1.42857;
    margin: 0 0 10px;
    padding: 10px;
    word-break: break-all;
    word-wrap: break-word;
	font-family: Monaco,Menlo,Consolas,Courier New,monospace;">

print yourprint = new print() {

	public void A6print() {
		System.out.println("Anonymous A6 Printer");
	}

};

yourprint.A6print(); 		// Anonymous A6 Printer
yourprint.A4print(); 		// A4 Printer
</pre>

</div>

<div class="w3-container">
<a class="w3-btn w3-left w3-camo-green w3-border" href="Memory_model.php">« Previous</a>
<a class="w3-btn w3-right w3-camo-green w3-border" href="Lamda_expressions.php">Next »</a>
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


