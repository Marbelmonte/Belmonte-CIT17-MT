<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Exercise</title>
</head>
<body>
<h1>Exercise 7</h1>

<?php
echo "<table border=\"1\">";
 

for ($row=1; $row<=7; $row++){
  echo "<tr>\n";
  
  for ($col=1; $col<=7; $col++){
    //First, do the math.
    $x=$col * $row;
       
    echo "<td>$x</td>\n";
  }
  echo "</tr>";
}
echo "</table>";
?>
</body>
</html>