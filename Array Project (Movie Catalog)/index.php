<?php

	$dir = "Animes";
	$files = scandir($dir);

	function pre_r($array)
	{
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}

	$files = array_diff($files, array("..", "."));
	$files = array_values($files);
	$animes = array();

	for ($i=0; $i < count($files) ; $i++) 
	{ 
		preg_match("!(.*?)\((.*?)\)!", $files[$i], $results);
		$anime_name = str_replace("_", " ", $results[1]);
		$anime_name = ucwords($anime_name);
		$animes[$anime_name]["image"] = $files[$i];
		$animes[$anime_name]["year"] = $results[2];
	}

	echo "<table id = 'movies' cellpadding = 50>";
	echo "<tr class = 'odd' >";

	foreach ($animes as $anime_name => $info)
	{
		$content = "<td><span class = 'name'> $anime_name </span><br />"
					. "<img src = 'animes/$info[image]'> <br />"
					. "<span class - 'year'> ($info[year]) </span><br />";
					echo $content;
	}

	echo "</tr> </table>";

?>

<style>
	#movies
	{
		background-color: #8B0000;
		color: #FFFF00;
		font: 15pt Verdana;
	}

	tr.header
	{
		background-color: #8B0000;
		color: #FFFF00;
		font: bold 15pt Impact;
	}
	tr.odd
	{
		background-color: #00008B;
	}
	tr.even
	{
		background-color: #141423;
	}

	img
	{
		padding: 14px;
	}

	td
	{
		text-align: center;
	}

	span.year
	{
		color: #ccc;
		font-size: 21px;
	}
	span.name
	{
		font-size: 25px;
		font-weight: bold;
	}

	body
	{
		margin: 0;
		padding: 0;
	}
</style>