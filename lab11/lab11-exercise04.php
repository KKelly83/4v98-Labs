<html>
<head>
<title>Exercise 8-4</title>
</head>
<body>
<h1>Age calculator</h1>
<?php 
	$birthday = mktime(0,0,0,1,15,2004);
	$today = time();
	$secondsOld = $today - $birthday;
?>

<?php echo "<p>Time elapsed since " . date("M d, Y", $birthday) . ":</p>";?>

<ul>
   <li><?php echo $secondsOld ?> seconds, or </li>
   <li><?php echo number_format($secondsOld/(60*60*24)) ?> days, or </li>
   <li><?php echo number_format((($secondsOld/(60*60*24))/365)*12,1, '.', '')  ?> months, or </li>
   <li><?php echo number_format(($secondsOld/(60*60*24))/365, 2, '.', '')?> years</li>
</ul>
</body>
</html>
