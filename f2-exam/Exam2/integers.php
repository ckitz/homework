<?php

$array=array(1,2,3,4,5);
$array2=array(6,7,8,9,10);



foreach($array as $number => $i) 
{
	
	foreach($array2 as $number1 => $i2) 
	{
		
	if($i < $i2)
		{
			$array3[$number] = $i;
			$array3[$number1+5] = $i2;
				
				//echo $i ."\n";
				//echo $i2 ."\n";
				//echo $number ."\n";
				//echo $number1 ."\n";
		}	

	 else 	
		{
			$array3[$number1]=$i2;
		}
		}
	}
arsort($array3);
print_r($array3);

?>