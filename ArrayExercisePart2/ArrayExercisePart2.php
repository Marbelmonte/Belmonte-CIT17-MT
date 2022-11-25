<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>


		
	</title>
</head>
<body>

	<h3>Write a PHP script to count a total number of duplicate elements in an array: </br></h3>
		<h3>The total count number of duplicate elements in an array.</h3>

	<?php

		$test1 = array(5, 1, 1);

		echo "The total number of duplicate elements found in the array is: ";

		for ($i=0; $i < count($test1); $i++) 
		{ 
			for ($j=$i + 1; $j < count($test1); $j++) 
			{ 
				if ($test1[$i] == $test1[$j]) 
				{
					echo "$test1[$j]";
				}
			}
		}

	?>

	<h3>Write a PHP script to count the frequency of each element of an array:</br></h3>
		<h3>The frequency of each element of the array.</h3>

	<?php

		$test2 = array(25, 12, 43);
		$times = 0;

		for ($i=0; $i < count($test2); $i++) 
		{
			for ($i = 0, $count = array(); $i < count($test2); $i++) 
			{
				if (!in_array($test2[$i], $count)) 
				{
					array_push($count, $test2[$i]);
				}

				for ($j = 0; $j < count($test2); $j++) 
				{
					if ($count[$i] == $test2[$j]) 
					{
                        $times++;
                    }
                }
                if ($count[$i]) 
                {
                    echo "$count[$i] occurs $times times<br/>";
                }
			}
		}

	?>

	<h3>Write a PHP script to separate odd and even integers in seperate arrays: </br></h3>
		<h3>The Seperated odd and even.</h3>

	<?php

		$test3 = array(25, 47, 42, 56, 32);
		$odd = array();
		$even = array();

		for ($i=0; $i < count($test3); $i++) 
		{ 
			 for ($i = 0; $i < count($test3); $i++) 
			 {
                if ($test3[$i] % 2 == 0) 
                {
                    array_push($even, $test3[$i]);
                }
                else 
                {
                    array_push($odd, $test3[$i]);
                }
            }
        }

        echo "<br/>The Even elements are :<br/>";

        for ($i = 0; $i < count($even); $i++) 
        {
            echo "$even[$i] ";
        }

        echo "<br/>The Odd elements are :<br/>";

        for ($i = 0; $i < count($odd); $i++) 
        {
            echo "$odd[$i] ";
        }

    ?>

</body>
</html>