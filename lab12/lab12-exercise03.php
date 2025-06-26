<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Exercise 12-3 Sorting Arrays</title>   
   
   <!-- Latest compiled and minified Bootstrap Core CSS -->
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<header>
</header>

 <div class="container theme-showcase" role="main">  
      <div class="jumbotron">
        <h1>Division Leaderboard</h1>
	<p>Sports League</p>
      </div>

<?php

$players = array("Jhan Belig" => 189,
                 "Yemenev Baltroy" => 367,
                 "Ilroy Malvi" => 210,
                 "James John" => 121,
                 "Walton Ling" => 368,
                 "Mitch Moore" => 382,
                 "Urslaw Whig" =>422,
                 "Leo M. Toalde" => 192,
                 "Richard Bee" => 281,
                 "Travis Wise" =>182);
echo "<pre>";
asort($players);
$players = array_reverse($players);
echo '<table class="table table-striped table-bordered">';
echo '<thead class="thead-dark">';
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Score</th>";
echo "</tr>";
echo '</thead>';
echo '<tbody>';
foreach ($players as $name => $score) {
	echo "<tr>";
	echo "<td>$name</td>";
	echo "<td>$score</td>";
	echo "</tr>";
}
echo '</tbody>';
echo "</table>";
echo "</pre>";
?>
 </div>
</body>
</html>
