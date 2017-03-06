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
  <h2>Functional Interfaces</h2>
</header>

<div class="w3-container">
<p>Functional Interfaces(@FunctionalInterface) can be defined as an java interface contains only one abstract method in it, may have as many as default methods and may also contain inherited methods from Object class.</P>
<p>This interfaces can be used with Lamda expressions. To make the Interface to FunctionalInterface, add @FunctionalInterface annotation to assert compiler that your interface is of type functional interface and can contain only one abstract method.</P>

<p>Compiler will throw you an error if you try adding a abstract or non abstract second method.</p>

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
@FunctionalInterface
public interface FristInterface {
	void print(String val);	
}
		</pre>
</p> 
 
<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> FunctionalInterface with inherited Object class method</p>

</div> 

<p>As mentioned earlier, FunctionalInterface can inherit any number of object classes methods</p>

<pre style="background-color: #001933;
    color: #cccccc;
    display: block;
    font-size: 12px;
    line-height: 1.42857;
    margin: 0 0 10px;
    padding: 10px;
    word-break: break-all;
    word-wrap: break-word;
	font-family: Monaco,Menlo,Consolas,Courier New,monospace;">@FunctionalInterface
public interface FristInterface {
	void print(String val);
	boolean equals(Object obj);
}
</pre>


<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> FunctionalInterface with default methods</p>

</div> 

<p>FunctionalInterface can also contain any number of default methods since from java 8 defaults are allowded and not abstarct.

<pre style="background-color: #001933;
    color: #cccccc;
    display: block;
    font-size: 12px;
    line-height: 1.42857;
    margin: 0 0 10px;
    padding: 10px;
    word-break: break-all;
    word-wrap: break-word;
	font-family: Monaco,Menlo,Consolas,Courier New,monospace;">@FunctionalInterface
interface Inftest {

	default void show() {
		System.out.println("show method");
	}
	
	default void print() {
		System.out.println("print method");
	}
	//abstract method
	void change(String a);
}
</pre>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> FunctionalInterface and Lamda expressions</p>

</div> 

<p> The below example depicts the use of functional interface with Lamda expressions</p>

<pre style="background-color: #001933;
    color: #cccccc;
    display: block;
    font-size: 12px;
    line-height: 1.42857;
    margin: 0 0 10px;
    padding: 10px;
    word-break: break-all;
    word-wrap: break-word;
	font-family: Monaco,Menlo,Consolas,Courier New,monospace;">Inftest inftest = (String name) -> {
			System.out.println("Printing"+ name);			
		};

		String name = "hello world";
		inftest.change(name);
</pre>


</div> 
<div class="w3-container">
<br/>
<br/>
<a class="w3-btn w3-left w3-camo-green w3-border" href="Lamda_expressions.php">« Previous</a>
<a class="w3-btn w3-right w3-camo-green w3-border" href="Optionals_Streams.php">Next »</a>
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


