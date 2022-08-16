<?php

function printLeaders($arr, $size)
{
	for ($i = 0; $i < $size; $i++)
	{
		for ($j = $i + 1;
			$j < $size; $j++)
		{
			if ($arr[$i] <=$arr[$j])
				break;
		}
		
		
		if ($j == $size)
            
			echo($arr[$i] . " ");
		}
}


$arr = array(16, 17, 4, 3, 5, 2);
$n = sizeof($arr);
printLeaders($arr, $n);
	

?>