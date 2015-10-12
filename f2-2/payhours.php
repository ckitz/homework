<?php
$hours=45;
$rate=10;
$overtimerate=(1.5*$rate);

if ($hours<=40)
	{
	echo $hours*$rate;
	}
	else 
	{
	echo (($hours-40)*$overtimerate)+400;
	}
	
?>