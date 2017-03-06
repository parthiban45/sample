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
  <h2>Optionals & Streams</h2>
</header>

<div class="w3-container">
<p>Java 8 API introduces Optionals and Streams</P>
<p>Optionals are not functional interfaces, instead it's a nifty utility to prevent NullPointerException, Streams represent a sequence of elements on which one or more operations can be performed</P>
<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Optionals - java.util.Optional</p>

</div> 

<p>Optional is a simple container for a value which may be null or non-null. Instead of returning null, in java 8 we can return optional(which can be empty) 
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
Optional<String> optional = Optional.of("hello");
optional.get();                 // "hello"
optional.isPresent();           // true
optional.ifPresent((s) -> System.out.println(s.toUpperCase())); // Hello
		</pre>
</p> 
 
<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p>Pipelines and Streams - java.util.Stream</p>

</div> 

<p>Stream, classes to support functional-style operations on streams of elements, such as map-reduce transformations on collections.</p>

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
 int sum = widgets.stream()
                  .filter(b -> b.getColor() == RED)
                  .mapToInt(b -> b.getWeight())
                  .sum();
</pre>

<p>The above example filters the widgets which are in RED color and get the weights and sum up and store it in sum,</p>
<p>Streams offer no storage and its not a data structure that stores elements; instead, it conveys elements from a source such as a data structure, an array, a generator function, or an I/O channel, through a pipeline sequence of aggregate(Lamda/Method references) operations.</p>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Filter</p>

</div> 
<p> Filter is an intermediate operation, which accepts predicates to filter all elements of the stream and return the result in parallel to the terminal operation like sum, forEach etc.. </p>
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
stringCollection
    .stream()
    .filter((sample) -> sample.startsWith("d"))
    .forEach(System.out::println);
</pre>

<p>Sort, Map, Redcuce, Match, Count are the other intermeidate stream operations avaialable for use in java 8. </p>

</div>



<div class="w3-container">
<br/>
<br/>
<a class="w3-btn w3-left w3-camo-green w3-border" href="Functional_Interfaces.php">« Previous</a>
<a class="w3-btn w3-right w3-camo-green w3-border" href="Method_References.php">Next »</a>
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


