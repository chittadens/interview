<?php

function countCurrency($amount)
{
	$notes = array(2000, 500, 200, 100, 50, 20, 10, 5, 1);
	$noteCounter = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
	
	
	for ($i = 0; $i < 9; $i++)
	{
		if ($amount >= $notes[$i])
		{
			$noteCounter[$i] = intval($amount / $notes[$i]);
			$amount = $amount % $notes[$i];
		}
	}	
	
	echo ("Currency Count -"."\n<br>");
	for ($i = 0; $i < 9; $i++)
	{
		if ($noteCounter[$i] != 0)
		{
			echo ($notes[$i] . " : " .$noteCounter[$i] . "\n<br>");
		}
	}
}


$amount = 575;
countCurrency($amount);


?>