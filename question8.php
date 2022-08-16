<?php

function findSimiller( $array1, $array2, $array3,
						$num1, $num2, $num3)
{
	
	
	$i = 0; $j = 0; $k = 0;

	
	while ($i < $num1 && $j < $num2 && $k < $num3)
	{
		
		
		if ($array1[$i] == $array2[$j] &&
					$array2[$j] == $array3[$k])
		{
			echo $array1[$i] , " ";
			$i++;
			$j++;
			$k++;
		}

		
		else if ($array1[$i] < $array2[$j])
			$i++;

		
		else if ($array2[$j] < $array3[$k])
			$j++;

		
		else
			$k++;
	}
}


	$array1 = array(10,11,12,13,14,15);
	$array2 = array(12,13,14,15,16);
	$array3 = array(14,15,16,17,18);
	$num1 = count($array1);
	$num2 = count($array2);
	$num3 = count($array3);

	echo "Common Elements are ";
	
	findSimiller($array1, $array2, $array3,$num1, $num2, $num3);
	

?>

