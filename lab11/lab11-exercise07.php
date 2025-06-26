<html>
<head>
<title>Exercise 8-7</title>
</head>
<body>
<h1>Simple Calendar using Loops</h1>

<table border="1">

<tr><th colspan="100%"><?php echo date('F')?></th> </tr>
<tr>
  <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
</tr>
<?php 
	$day = 0;
	$days = date('t');
	$dayOne = date("w",mktime(0,0,0,date("n"),1,date("Y")));
	$weekCounter = 0;
	
	while ($day<$days) {
		if ($weekCounter%7 == 0) {
			echo "</tr><tr>";
		}
		if ($dayOne==0) {
				echo "<td>".($day+1)."</td>";
				$day++;
		} else {
			echo "<td></td>";
			$dayOne--;
		}
		$weekCounter++;
	}
?>

</table>


</body>
</html>
