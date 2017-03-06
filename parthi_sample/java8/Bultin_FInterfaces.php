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
  <h2>Bultin Functional Interfaces</h2>
</header>

<div class="w3-container">
<p>Java 8 API comes with few Built in functional interface including comaparable and runnable(Older versions)</P>
<p>Few of which newly introduced are Predicates, Functions, Suppliers, Consumers, Comparators, Optionals.</P>
<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Predicates - java.util.function.predicate</p>

</div> 

<p>Predicates represents a predicate (boolean-valued function) of one argument. 1.8 version of Java includes few default methods for complex logical terms (and, or, negate) 
</p>

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
Predicate<int> predicate = (a) -> a > 0;
predicate.test(5);              	// true
predicate.negate().test("foo");     // false;
		</pre>
</p> 
 
<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p>Functions</p>

</div> 

<p>Represents a function that accepts one argument and produces a result, Apply -Applies this function to the given argument, is the main method and Default methods available(compose, andThen,identity) such as can be used to chain multiple functions together.</p>

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
Function<String, Integer> toInteger = Integer::valueOf;
Function<String, String> backToString = toInteger.andThen(String::valueOf);

backToString.apply("54321");     // "54321"
</pre>


<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Suppliers</p>

</div> 
<p> Suppliers produce a result of a given generic type. Unlike Functions, Suppliers don't accept arguments. No default methods available since there is no requirement that a new or distinct result be returned each time the supplier is invoked. </p>
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
Supplier<Student> studentSupplier = Student::new;
studentSupplier.get();   // new Student
</pre>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Consumer</p>

</div> 

<p> Consumers represents operations to be performed on a single input argument. Default method andThen() can be user for consumer chaining.</p>

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
Consumer<Student> sayhello = (s) -> System.out.println("Hello, " + s.firstName);
sayhello.accept(new Student("sam", "lawrence"));

</pre>

<p> There are many others functional interfaces exist in the java.util.function package with variations of the above like BiFunction, BiPredicate, DoubleSupplier, ObjIntConsumer, UnaryOperator to suit the needs based on the data types.</p>

</div>

<div class="w3-container">
<br/>
<br/>
<a class="w3-btn w3-left w3-camo-green w3-border" href="Method_References.php">« Previous</a>
<a class="w3-btn w3-right w3-camo-green w3-border" href="Date_API.php">Next »</a>
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


