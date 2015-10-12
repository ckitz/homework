<?php

function factorial($value)
	{ 
    if ($value < 2) 
	{ 
        return 1; 
    } 
	else 
	{ 
        return ($value*factorial($value-1)); 
    } 
}
echo factorial(4 );
$first=factorial(4);
$second=factorial(3);
$third=factorial(2);
$fourth=factorial(1);

$sum1=($first+$third);
$sum2=($second+$fourth);

$array=(array($sum1,$sum2));

print_r(array_values($array));

?>