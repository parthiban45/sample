
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
  <h2>Lamda Expressions</h2>
</header>

<div class="w3-container">
<p>Lambda expressions(->) are a new and important feature included in Java SE 8. They provide a clear and concise way to represent one method interface using an expression</P>
<p>For better understaing of Lamdas, lets first take a look at the below anonymous class comparator sorts the countries list in alphatecial order.</P>
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
List<String> countries = Arrays.asList("UnitedStates","India","Russia","Thailand","Poland","Australia");
		
		Collections.sort(countries, new Comparator<String>() {
			public int compare(String s1, String s2) {
				return s1.compareTo(s2);
			}
		});
		</pre>
</p> 
<p> <ol>We can even think of creating new comparator objects and pass them to collections static method sort. </ol></P>
 
<p> Instead of creating ananymous classes, Java 8 comes with a simplified version called Lamda expressions.</p>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Lamdas in a block</p>

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

	Collections.sort(countries, (String s1, String s2) -> {
			return s1.compareTo(s2);
		});
}
</pre>


<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Lamdas can still work without a block and return statement for one line deifinitions.</p>

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

	Collections.sort(countries, (String s1, String s2) -> s1.compareTo(s2));
}
</pre>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Lamdas still work withoout argument data types, java 8 compiler can able identify and match the types and associate them with variables automatically.</p>

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

	Collections.sort(countries, (s1, s2) -> s1.compareTo(s2));
}
</pre>


</div> 
<div class="w3-container">
<a class="w3-btn w3-left w3-camo-green w3-border" href="default_methods.php">« Previous</a>
<a class="w3-btn w3-right w3-camo-green w3-border" href="Functional_Interfaces.php">Next »</a>
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


