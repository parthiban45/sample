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
  <h2>Method and Constructor References</h2>
</header>

<div class="w3-container">
<p>Java static method references are now be simplified in Java 8 using <code class="w3-codespan w3-black">::</code> Keyword.</P>
<p>Consider the below example converts lowercase string to uppercase string using a functional interface, class with a static method and shows the usage of :: keyword for static references keyword</P>

<p>Example :</P>
<p><div class="prestyle">
@FunctionalInterface
interface Iconvert {
	String display(final String source);
}

class convert {

	public static String uppercase_display(final String source) {
		return source.toUpperCase();
	}

}

		String convertMe = "sample";
		Iconvert iconvert = convert::uppercase_display;
		iconvert.display(convertMe);
		System.out.println(iconvert.display(convertMe));
		</div> 
</p> 
 
<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Without the above references keyword, we would have followded the traditional approach shown in the below example,</p>

</div> 

<pre class="prestyle">class converter implements Iconvert {

	public String display(final String convertme) {
		return convert.uppercase_display(convertme);
	}
}

		Iconvert iconvert1 = new converter();
		System.out.println(iconvert1.display(convertMe));
</pre>


<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Same example with Lamda representation</p>

</div> 

<pre class="prestyle">
		Iconvert iconvert1 = (source) -> convert.uppercase_display(source);
		System.out.println(iconvert1.display(convertMe));
</pre>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Constructor method references</p>

</div> 

<p> Consider the below example </p>

<pre class="prestyle">class square {

	public int length;
	public int width;

	square() {
	}

	square(int length, int width) {
		this.length = length;
		this.width = width;
	}
}

interface shapeFactory {
	square createsquare(int length, int width);
}

class shape implements shapeFactory {
	public square createsquare(int length, int width) {
		return new square(length, width);
	}
}

	shapeFactory lf = new shape();
	square s1 = lf.createsquare(100, 200);
</pre>

<p> To create new shape called square we will need to implement shapeFactory method createsquare in shape class and then create new square in main class, now with the introduction of constructor references in Java8, there is no need for shape class and we can implement the square directly to shapeFactory like the below,</p>
 

<pre class="prestyle">class square {

	public int length;
	public int width;

	square() {
	}

	square(int length, int width) {
		this.length = length;
		this.width = width;
	}
}

interface shapeFactory {
	square createsquare(int length, int width);
}

		shapeFactory sf = square::new;
		square s2 = sf.createsquare(100, 200);
</pre>

</div>

<div class="w3-container">
<br/>
<br/>
<a class="w3-btn w3-left w3-camo-green w3-border" href="Optionals_Streams.php">« Previous</a>
<a class="w3-btn w3-right w3-camo-green w3-border" href="Bultin_FInterfaces.php">Next »</a>
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


