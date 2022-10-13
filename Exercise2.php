<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		


	</title>
</head>
<body>

<?php

#Setting up the array.
$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai, Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

#Printing the array.
for ($i = 0; $i < count($cities); $i++)
{
	echo $cities[$i], ", ";
}

echo "</br>", "</br>";

#Printing the unordered array.
for ($i = 0; $i < count($cities); $i++)
{
	echo "<li>{$cities[$i]}</li>";
}

echo "</br>", "</br>";

#Sorting.
sort($cities);

#Printing sorted array.
for ($i = 0; $i < count($cities); $i++)
{
	echo "<li>{$cities[$i]}</li>";
}

echo "</br>", "</br>";

#Pushing elements.
array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

#Printing the unordered array with additions.
for ($i = 0; $i < count($cities); $i++)
{
	echo "<li>{$cities[$i]}</li>";
}

?>

</body>
</html>