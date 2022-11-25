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

$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai, Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

for ($i = 0; $i < count($cities); $i++)
{
	echo $cities[$i], ", ";
}

echo "</br>", "</br>";

for ($i = 0; $i < count($cities); $i++)
{
	echo "<li>{$cities[$i]}</li>";
}

echo "</br>", "</br>";

sort($cities);

for ($i = 0; $i < count($cities); $i++)
{
	echo "<li>{$cities[$i]}</li>";
}

echo "</br>", "</br>";

array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

for ($i = 0; $i < count($cities); $i++)
{
	echo "<li>{$cities[$i]}</li>";
}

?>

</body>
	</html>
