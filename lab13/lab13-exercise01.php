<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Exercise 13-1 Creating Classes</title>   
   
   <!-- Latest compiled and minified Bootstrap Core CSS -->
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
<h1>Weather forecast using classes</h1>
</header>

<div class='container'>
<?php 

ini_set("display_errors",1);
date_default_timezone_set('GMT');
   
include_once("Forecast.class.php");

$today = time();
$oneday = 60*60*24;

$forecast = array(
    new Forecast(date("d M, Y", $today), 64, 34, "Sunny"),
    new Forecast(date("d M, Y", $today + $oneday), 57, 47, "Sunny"),
    new Forecast(date("d M, Y", $today + 2 * $oneday), 55, 41, "Scattered showers"),
    new Forecast(date("d M, Y", $today + 3 * $oneday), 53, 30, "Mostly sunny"),
    new Forecast(date("d M, Y", $today + 4 * $oneday), 47, 38, "Mostly cloudy"),
    new Forecast(date("d M, Y", $today + 5 * $oneday), 56, 45, "Partly cloudy"),
    new Forecast(date("d M, Y", $today + 6 * $oneday), 66, 49, "Mostly cloudy"),
    new Forecast(date("d M, Y", $today + 7 * $oneday), 60, 40, "Partly cloudy")
);
foreach($forecast as $day) {
	echo $day;
};


?>
</div>


</body>
<footer>
	<h3>Record High: <?php echo Forecast::$allTimeHigh; ?> </h3>
	<h3>Record Low: <?php echo Forecast::$allTimeLow; ?> </h3>
</footer>

</html>
