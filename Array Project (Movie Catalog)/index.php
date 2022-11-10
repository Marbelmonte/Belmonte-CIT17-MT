<!DOCTYPE html>
<html>
<head>
	<title>Movie Catalog</title>
</head>
<body>
<?php

$dir = 'marvel';
$files = scandir($dir);

//pre_r($files);

function pre_r($array) {
	//echo '<pre>';
	print_r($array);
	//echo '</pre>';
}

$files = array_diff($files, array('..', '.'));
//pre_r($files);
$files = array_values($files);
//pre_r($files);

$marvel = array();

for ($i = 0; $i < count($files); $i++) {
	preg_match("!(.*?)\((.*?)\)!",$files[$i], $results);
	$marvel_name = str_replace('_',' ', $results[1]);
	$marvel_name = ucwords($marvel_name);

	$marvel[$marvel_name]['image'] = $files[$i];
	$marvel[$marvel_name]['fileNum'] = $results[2];
}

echo "<table id = 'marvel' cellpadding = 50>";
echo "<tr class = 'odd'>";

foreach ($marvel as $marvel_name => $info){
	$content = "<td><span class = 'name'>$marvel_name</span><br />"
	. "<img src = 'marvel/$info[image]'><br />"
	. "<span class - 'fileNum'>( $info[fileNum] )</span></td>";
	echo $content;
}

echo "</tr></table>";
?>

<style>
	#marvel {
		background-color: #000;
		color: #fff;
		font: 11pt Calibri;
	}
	tr.header {
		background-color: #111f4e;
		color: #fff;
		font: bold 11pt Calibri;
	}
	tr.odd {
		background-color: #18182b;
	}
	tr.even {
		background-color: #141423;
	}
	img {
		padding: 10px;
	}
	span.fileNum {
		color: #ccc;
		font-size: 18px;
	}
	span.name {
		font-size: 18px;
		font-weight: bold;
	}
	body{
		margin: 0;
		padding: 0;
	}
</style>

</body>
</html>