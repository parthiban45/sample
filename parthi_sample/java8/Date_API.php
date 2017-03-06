<!DOCTYPE html>
<html>

<head>
<!-- header imports -->
<?php include("header-imports.php"); ?>
<!-- -->
</head>
<body class="w3-container w3-lightgray">
<!-- header -->
<?php include("header.php"); ?>
<!-- -->

<!-- Side navigation bar -->
<?php include("menu.php"); ?>
<!-- -->

<div class="w3-main" style="margin-left:200px">
<header class="w3-container w3-amber">
  <span class="w3-opennav w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</span>
  <h2>Date API</h2>
</header>

<div class="w3-container">
<p>Java 8 comes with a new flavour of its legacy Date API</P>
<p>The new Date API is comparable with the Joda-Time library, it resembles few of the feautres but its not the same. Below are few exapmples of new Date API</P>
<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> Clock</p>

</div> 

<p>Clock provides access to the current date and time. Java 8 introduces a class Instant, to represent instantaneous point on the time-line, Instants can be used to create legacy java.util.Date objects. Clocks are aware of a timezone and may be used instead of System.currentTimeMillis() to retrieve the current milliseconds. 
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
Clock clock = Clock.systemDefaultZone();
Instant instant = clock.instant();
Date legacyDate = Date.from(instant);
long millis = clock.millis();
		</pre>
</p> 
 
<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p>Timezones</p>

</div> 

<p>Timezones are represented by a ZoneId. They can easily be accessed via static factory methods readily avaialble for use.</p>

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
ZoneId.getAvailableZoneIds();
// get all available timezone ids
ZoneId z1 = ZoneId.of("Asia/Chennai");
zone1.getRules();
// get the timezone rules associated to Asia/Chennai timezone
</pre>


<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> LocalTime</p>

</div> 
<p> LocalTime represents a time without a timezone, It is an therad-safe immutable date-time object that represents a time, often viewed as hour-minute-second. Time is represented to nanosecond precision. For example, the value "13:45.30.123456789" can be stored in a LocalTime. </p>
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
	LocalTime time = LocalTime.now(); 
	System.out.println("local time now : " + time);  // local time now : 16:33:33.369 // in hour, minutes, seconds, nano seconds
</pre>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> LocalDate</p>

</div> 

<p> LocalDate is a thread-safe immutable date-time object that represents a date, often viewed as year-month-day. Other date fields, such as day-of-year, day-of-week and week-of-year, can also be accessed. For example, the value "2nd October 2007" can be stored in a LocalDate.</p>

<p> This class does not store or represent a time or time-zone. Instead, it is a description of the date, as used for birthdays. It cannot represent an instant on the time-line without additional information such as an offset or time-zone.</p>

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
	LocalDate today = LocalDate.now(); 
	System.out.println("Today's Local date : " + today); //  Today's Local date : 2014-01-14

</pre>

<div class="w3-panel w3-pale-red w3-leftbar w3-border-red">

<p> LocalDateTime</p>

</div> 

<p> LocalDateTime is an immutable date-time object that represents a date-time, often viewed as year-month-day-hour-minute-second. Other date and time fields, such as day-of-year, day-of-week and week-of-year, can also be accessed. Time is represented to nanosecond precision. For example, the value "2nd October 2007 at 13:45.30.123456789" can be stored in a LocalDateTime.</p>

<p>This class does not store or represent a time-zone. Instead, it is a description of the date, as used for birthdays, combined with the local time as seen on a wall clock. It cannot represent an instant on the time-line without additional information such as an offset or time-zone.</p>
 

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
	LocalDateTime datetime = LocalDateTime.of(2014, Month.JANUARY, 14, 19, 30); 
	ZoneOffset offset = ZoneOffset.of("+05:30"); 
	OffsetDateTime date = OffsetDateTime.of(datetime, offset); 
	System.out.println("Date and Time with timezone offset in Java : " + date); // Date and Time with timezone offset in Java : 2014-01-14T19:30+05:30
</pre>

</div>

<div class="w3-container">
<br/>
<br/>
<a class="w3-btn w3-left w3-camo-green w3-border" href="Bultin_FInterfaces.php">« Previous</a>
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


