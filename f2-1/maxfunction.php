<?php
$myarray =array(1,2,3,11,5,6,7,8,9,14);
$maxvalue=0;

foreach ($myarray as $x=>$val)
	{
	if ($val > $maxvalue) {
		
	$maxvalue=$val;
	}
	}
echo $maxvalue;	
?>