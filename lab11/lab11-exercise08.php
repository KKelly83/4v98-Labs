<?php
   // function definition can go here
	 function convertUnits($startVal, $startUnits, $endUnits) {
		 $mlToOz = 0.033814;
		 $mlToCup = 0.00422675;
		 
		 //first ensure starting units are ml (process if not)
		 if (!$startUnits = "ml") {
			 if ($startUnits = "oz") {
				 $startVal = $startVal * (1/$mlToOz);
			 } else { //cups
				 $startVal = $startVal * (1/$mlToCup);
			 }
		 }
		 
		 if ($endUnits == "oz") {
			 $startVal = $startVal * $mlToOz;
		 } else if ($endUnits == "cups") {
			 $startVal = $startVal * $mlToCup;
		 } 
		 //if start/end both ml... do nothing!
		 
		 return number_format($startVal,2,'.','');
	 }
	 
?>
<html>
<head>
<title>Exercise 8-8</title>
</head>
<body>
<h1>Making and using functions</h1>


<table border=1>
<tr>
  <th>milliliters</th><th>Cups</th><th>Ounces</th>
<?php
for($i=50;$i<=1000;$i+=50){
   echo "<tr>";
   echo "<td>$i</td>";
   // replace the ??? with the calls to convertUnits function
   echo "<td>". convertUnits($i, "ml", "cups") ."</td>";
   echo "<td>". convertUnits($i, "ml", "oz") ."</td>";
   echo "</tr>";
}
?>
</tr>
</table>


</body>
</html>
