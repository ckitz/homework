<?php

$seconds=86400;
$minutes=($seconds/60);
$remseconds=($seconds%60);
$hours=($seconds/3600);
$remminutes=($seconds%3600);
$days=($seconds/86400);
$remhours=($seconds%86400);

if($seconds<60)
	{echo "00 00:00:$seconds";}
elseif($seconds<3600)
	{echo "00 00:$minutes:$remseconds";}
elseif($seconds<86400)
	{echo "00 $hours:$remminutes:$remseconds";}
elseif($seconds>86400)
	{echo "$days $hours:$remminutes:$remseconds";}
else
{echo "too long";}

?>